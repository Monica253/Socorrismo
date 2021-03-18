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
                                {!! Form::label('encargado_id', 'Manager') !!}
                                {!! Form::select('encargado_id', $encargados, null, ['class' => 'form-control', 'placeholder' => "Select Hotel's name"]) !!}
                                
                                @error('encargado_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
        
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('empleado_id', 'Employee') !!}
                                {!! Form::select('empleado_id', $empleados, null, ['class' => 'form-control', 'placeholder' => "Select Hotel's name"]) !!}
                                
                                @error('empleado_id')
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
                        {!! Form::label('work_date', 'Date') !!}
                        {!! Form::date('work_date', null, ['class' => 'form-control', 'placeholder' => "Date"]) !!}
                        
                        @error('work_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
        
                    </div>
                    
                {!! Form::submit('Create laboral day', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
