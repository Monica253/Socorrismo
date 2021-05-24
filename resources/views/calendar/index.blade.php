<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<x-app-layout>
    <div>
        <div class="w-full py-2">
            <h1 class="text-4xl text-gray-700 mb-2 mt-2 text-center">{{ __('Calendar') }}</h1>
        </div>
        <div class="sm:px-6 lg:px-8 mt-2 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div id="calendar" class="animate__animated animate__fadeInLeft"></div>
            <aside>
                <div id="calendar2" class="animate__animated animate__fadeInRight">
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
            monthNames: ["{{ __('January') }}","{{ __('February') }}","{{ __('March') }}","{{ __('April') }}","{{ __('May') }}","{{ __('June') }}","{{ __('July') }}","{{ __('August') }}","{{ __('September') }}","{{ __('October') }}","{{ __('November') }}","{{ __('December') }}"],
            monthNamesShort: ["{{ __('Jan') }}","{{ __('Feb') }}","{{ __('Mar') }}","{{ __('Apr') }}","{{ __('May') }}","{{ __('Jun') }}","{{ __('Jul') }}","{{ __('Aug') }}","{{ __('Sep') }}","{{ __('Oct') }}","{{ __('Nov') }}","{{ __('Dec') }}"],
            dayNames: ["{{ __('Sunday') }}","{{ __('Monday') }}","{{ __('Tuesday') }}","{{ __('Wednesday') }}","{{ __('Thursday') }}","{{ __('Friday') }}","{{ __('Saturday') }}"],
            dayNamesShort: ["{{ __('Sun') }}","{{ __('Mon') }}","{{ __('Tue') }}","{{ __('Wed') }}","{{ __('Thu') }}","{{ __('Fri') }}","{{ __('Sat') }}"],
            // put your options and callbacks here
            themeSystem: "standard",
            selectable: true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month'
            },
            buttonText: {
                today: "{{ __('Today') }}",
                month: "{{ __('Month') }}"
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
            monthNames: ["{{ __('January') }}","{{ __('February') }}","{{ __('March') }}","{{ __('April') }}","{{ __('May') }}","{{ __('June') }}","{{ __('July') }}","{{ __('August') }}","{{ __('September') }}","{{ __('October') }}","{{ __('November') }}","{{ __('December') }}"],
            monthNamesShort: ["{{ __('Jan') }}","{{ __('Feb') }}","{{ __('Mar') }}","{{ __('Apr') }}","{{ __('May') }}","{{ __('Jun') }}","{{ __('Jul') }}","{{ __('Aug') }}","{{ __('Sep') }}","{{ __('Oct') }}","{{ __('Nov') }}","{{ __('Dec') }}"],
            dayNames: ["{{ __('Sunday') }}","{{ __('Monday') }}","{{ __('Tuesday') }}","{{ __('Wednesday') }}","{{ __('Thursday') }}","{{ __('Friday') }}","{{ __('Saturday') }}"],
            dayNamesShort: ["{{ __('Sun') }}","{{ __('Mon') }}","{{ __('Tue') }}","{{ __('Wed') }}","{{ __('Thu') }}","{{ __('Fri') }}","{{ __('Sat') }}"],
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
