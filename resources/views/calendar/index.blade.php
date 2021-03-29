<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-10 py-10 z-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div id="calendar"></div>
            <aside>
                <div id="calendar2">
                    <ul class="list-disc">
                        @foreach ($dias as $dia)
                            <li>{{$dia->fecha_inicio}} - {{$dia->fecha_fin}} : {{ $dia->centro->nombre }} - {{ $dia->centro->horarios }} - {{ $dia->piscina->nombre }}</li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</x-app-layout>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            themeSystem: "standard",
            selectable: true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,listDay,listWeek,listYear'
            },
            buttonText: {
                month: 'Month',
                listDay: 'List day',
                listWeek: 'List week',
                listYear: 'List year'
            },
            events : [
                @foreach($dias as $dia)
                {
                    title : '{{ $dia->centro->nombre }} - {{ $dia->centro->horarios }} - {{ $dia->piscina->nombre }}',
                    start : '{{ $dia->fecha_inicio }}',
                    end : '{{ $dia->fecha_fin }}',
                    url : '{{ route('admin.dias.edit', $dia->id) }}',
                    textColor: 'black',
                    color: '{{ $dia->user->color }}'
                },
                @endforeach
            ]
        })
        /*$('#calendar2').fullCalendar({
            // put your options and callbacks here
            defaultView: "listWeek",
            header:{
                left:'prev,next today',
                center:'title',
                right:'listWeek,listYear'
            },
            buttonText: {
                month: 'Month',
                listDay: 'List day',
                listWeek: 'List week',
                listYear: 'List year'
            },
            events : [
                @foreach($dias as $dia)
                {
                    title : '{{ $dia->centro->nombre }} - {{ $dia->centro->horarios }} - {{ $dia->piscina->nombre }}',
                    start : '{{ $dia->fecha_inicio }}',
                    end : '{{ $dia->fecha_fin }}',
                    url : '{{ route('admin.dias.edit', $dia->id) }}',
                    textColor: 'black',
                    color: '{{ $dia->user->color }}'
                },
                @endforeach
            ]
        })*/
    });
</script>
