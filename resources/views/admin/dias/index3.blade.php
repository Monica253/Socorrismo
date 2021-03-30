@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Fullcalendar', true)

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('css')
<link rel="stylesheet" href='https://fullcalendar.io/releases/core/4.1.0/main.min.css'/>
<link rel="stylesheet" href='https://fullcalendar.io/releases/daygrid/4.1.0/main.min.css'/>
<link rel="stylesheet" href='https://fullcalendar.io/releases/timegrid/4.1.0/main.min.css'/>
<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.dias.store', 'autocomplete' => 'off']) !!}

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('centro_id', 'Hotel') !!}
                                {!! Form::select('centro_id', $centros, null, ['class' => 'form-control', 'placeholder' => "Select Hotel's name"]) !!}
                                
                                @error('centro_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
        
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('piscina_id', 'Pool') !!}
                                {!! Form::select('piscina_id', $piscinas, null, ['class' => 'form-control', 'placeholder' => "Select Hotel's name"]) !!}
                                
                                @error('piscina_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
        
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('horarios', 'Timetable') !!}
                        {!! Form::select('horarios', ['10:00 - 18:00' => '10:00 - 18:00', '10:00 - 19:00' => '10:00 - 19:00', '11:00 - 19:00' => '11:00 - 19:00'], null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's timetable"]) !!}
                        
                        @error('horarios')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
        
                    </div>

                    <div class="row"> 
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="fromDate">From:</label>
                            <input type="date" class="form-control" placeholder="Enter from date" id="fromDate">
                        </div>
                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="toDate">To:</label>
                            <input type="date" class="form-control" id="toDate">
                        </div>
                        </div>
        
                    </div>
                    
                {!! Form::submit('Create laboral day', ['class' => 'btn btn-primary']) !!}

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
    <script src='https://fullcalendar.io/releases/core/4.1.0/main.min.js'></script>
    <script src='https://fullcalendar.io/releases/interaction/4.1.0/main.min.js'></script>
    <script src='https://fullcalendar.io/releases/daygrid/4.1.0/main.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {	
            $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                navLinks: true, // can click day/week names to navigate views
                eventLimit: true, // allow "more" link when too many events
            });
        });
      </script>
@stop
