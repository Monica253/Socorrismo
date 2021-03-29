@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Fullcalendar', true)

@section('content_header')
    <h1>Edit Date</h1>
@stop

@section('css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! Form::model($dia, ['route' => ['admin.dias.update', $dia], 'method' => 'put']) !!}
    
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('user_id', 'Employee') !!}
                                {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => "Select Hotel's name"]) !!}
                                
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

                    <div class="form-group">
                        {!! Form::label('fecha_inicio', 'From') !!}
                        {!! Form::date('fecha_inicio', null, ['class' => 'form-control', 'placeholder' => "Date"]) !!}

                    </div>

                    <div class="form-group">
                        {!! Form::label('fecha_fin', 'To') !!}
                        {!! Form::date('fecha_fin', null, ['class' => 'form-control', 'placeholder' => "Date"]) !!}
        
                    </div>
                    
                {!! Form::submit('Create laboral day', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>

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
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                editable: true,
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
                        title : '{{ $dia->user->nombre }} - {{ $dia->centro->nombre }} - {{ $dia->piscina->nombre }} - {{ $dia->centro->horarios }}',
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
