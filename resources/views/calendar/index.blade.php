<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-10 py-10 z-0">
        <h1 class="text-4xl text-gray-600 font-bold mb-4">{{ __('Calendar') }}</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div id="calendar"></div>
            <aside>
                <div id="calendar2">
                    <!--<h1 class="text-2xl leading-8 font-semibold mb-4">{{ __('List') }}</h1>
                    <hr class="border-dashed border-2 border-blue-600 mb-2">
                    <ul>
                        @foreach ($dias as $dia)
                            <li><a href="{{route('calendar.show', $dia)}}"><i class="fas fa-eye mr-1"></i></a>{{date('d-m-Y', strtotime($dia->fecha_inicio))}} - {{date('d-m-Y', strtotime($dia->fecha_fin))}} : {{ $dia->centro->nombre }} - {{ $dia->centro->horarios }} - {{ $dia->piscina->nombre }}</li>
                            <hr>
                        @endforeach
                    </ul>-->
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
                right:'month,listDay'
            },
            buttonText: {
                today: "{{ __('Today') }}",
                month: "{{ __('Month') }}",
                listDay: "{{ __('List day') }}"
            },
            events : [
                @foreach($dias as $dia)
                {
                    title : '{{ $dia->centro->nombre }} - {{ $dia->centro->horarios }} - {{ $dia->piscina->nombre }}',
                    start : '{{ $dia->fecha_inicio }}',
                    end : '{{ $dia->fecha_fin }}',
                    url : '{{ route('calendar.show', $dia) }}',
                    textColor: 'black',
                    color: '{{ $dia->user->color }}'
                },
                @endforeach
            ]
        })
        $('#calendar2').fullCalendar({
            // put your options and callbacks here
            defaultView: "listWeek",
            header:{
                left:'prev,next today',
                center:'title',
                right:'listWeek,listYear'
            },
            buttonText: {
                today: "{{ __('Today') }}",
                month: "{{ __('Month') }}",
                listDay: "{{ __('List day') }}",
                listWeek: "{{ __('List week') }}",
                listYear: "{{ __('List year') }}"
            },
            events : [
                @foreach($dias as $dia)
                {
                    title : '{{ $dia->centro->nombre }} - {{ $dia->centro->horarios }} - {{ $dia->piscina->nombre }}',
                    start : '{{ $dia->fecha_inicio }}',
                    end : '{{ $dia->fecha_fin }}',
                    url : '{{ route('calendar.show', $dia) }}',
                    textColor: 'black',
                    color: '{{ $dia->user->color }}'
                },
                @endforeach
            ]
        })
    });
</script>
