@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Hotel</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($centro, ['route' => ['admin.centros.update', $centro], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('nombre', 'Name') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's name"]) !!}
                
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('cadena_hotelera', 'Hotel Company') !!}
                {!! Form::text('cadena_hotelera', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's company"]) !!}
                
                @error('cadena_hotelera')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's email"]) !!}
                
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('telefono', 'Phone Number') !!}
                {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's phone number"]) !!}
                
                @error('telefono')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('direccion', 'Address') !!}
                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's address"]) !!}
                
                @error('direccion')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('latitud', 'Latitude') !!}
                {!! Form::text('latitud', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's latitude"]) !!}
                
                @error('latitud')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('longitud', 'Longitude') !!}
                {!! Form::text('longitud', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's longitude"]) !!}
                
                @error('longitud')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('horarios', 'Timetable') !!}
                {!! Form::text('horarios', null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's timetable"]) !!}
                
                @error('horarios')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => "hotel's slug", 'readonly']) !!}
            
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

                {!! Form::submit('Modify hotel', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection