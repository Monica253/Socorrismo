@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Hotel</h1>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

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

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Image') !!}
                        {!! Form::file('file', ['class' => 'form-control-file']) !!}
                    </div>
                </div>
                <div class="col">
                    <div class="image-wrapper">
                        @if($centro->image)
                            <img id="picture" src="{{Storage::url($centro->image->url)}}" alt="">
                        @else
                            <img id="picture" class="float-right object-cover object-center" src="{{asset('/imagenes/piscinaEjemplo.png')}}" alt="">
                        @endif
                    </div>
                </div>
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
                {!! Form::select('horarios', ['10:00 - 18:00' => '10:00 - 18:00', '10:00 - 19:00' => '10:00 - 19:00', '11:00 - 19:00' => '11:00 - 19:00'], null, ['class' => 'form-control', 'placeholder' => "Introduce hotel's timetable"]) !!}
                
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

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
                document.getElementById("picture").style.opacity = "1"; 
            };

            reader.readAsDataURL(file);
        }
    </script>

@endsection