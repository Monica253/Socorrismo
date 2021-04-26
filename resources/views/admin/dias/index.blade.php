@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Fullcalendar', true)

@section('content_header')
    <a class="btn btn-sm btn-danger float-right" href="{{ route('diastrabajoPDF') }}">{{ __('PDF') }}</a>
    <h1>{{ __('Calendar') }}</h1>
@stop

@section('css')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.dias.store', 'autocomplete' => 'off']) !!}
    
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('user_id', trans('validation.attributes.Employee')) !!}
                                {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.employeePH')]) !!}
                                
                                @error('user_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('centro_id', 'Hotel') !!}
                                {!! Form::select('centro_id', $centros, null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.hotelPH')]) !!}
                                
                                @error('centro_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('piscina_id', trans('validation.attributes.Pool')) !!}
                                {!! Form::select('piscina_id', $piscinas, null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.poolPH')]) !!}
            
                                @error('piscina_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('horarios', trans('validation.attributes.Timetable')) !!}
                        {!! Form::select('horarios', ['10:00 - 18:00' => '10:00 - 18:00', '10:00 - 19:00' => '10:00 - 19:00', '11:00 - 19:00' => '11:00 - 19:00'], null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.timetablePH')]) !!}
                        
                        @error('horarios')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <!--<div class="form-group">
                        {!! Form::label('fecha_trabajo', 'Date') !!}
                        {!! Form::date('fecha_trabajo', null, ['class' => 'form-control', 'placeholder' => "Date"]) !!}
                        
                        @error('fecha_trabajo')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
        
                    </div>-->

                    <div class="form-row mt-2">
                        <div class="col">
                            {!! Form::label('fecha_inicio', trans('validation.attributes.From')) !!}
                            {!! Form::date('fecha_inicio', null, ['class' => 'form-control', 'placeholder' => "Date"]) !!}
                        
                            @error('fecha_inicio')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    
                        <div class="col">
                            {!! Form::label('fecha_fin', trans('validation.attributes.To')) !!}
                            {!! Form::date('fecha_fin', null, ['class' => 'form-control', 'placeholder' => "Date"]) !!}
                        
                            @error('fecha_fin')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                {!! Form::submit(trans('validation.attributes.CreateDay'), ['class' => 'form-control mt-4 btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="card-body">
                <div id="calendar">
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
@parent
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
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
                    right:'month,listDay,listWeek,listYear'
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
                        title : '{{ $dia->user->name }} - {{ $dia->centro->nombre }} - {{ $dia->piscina->nombre }} - {{ $dia->centro->horarios }}',
                        start : '{{ $dia->fecha_inicio }}',
                        end : '{{ $dia->fecha_fin }}',
                        url : '{{ route('admin.dias.edit', $dia->id) }}',
                        textColor: 'black',
                        color: '{{ $dia->user->color }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>
@stop
