@extends('adminlte::page')

@section('title', trans('validation.attributes.EHTitle'))

@section('content_header')
    <a class="btn btn-sm btn-secondary float-right" href="{{route('admin.centros.index')}}">{{ __('Back to list') }}</a>
    <h1>{{ __('Edit hotel') }}</h1>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        #picture{
            opacity: 0.5;
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
    <div class="card">
        <div class="card-body">
            {!! Form::model($centro, ['route' => ['admin.centros.update', $centro], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

                @include('admin.centros.partials.form')

                {!! Form::submit(trans('validation.attributes.ModifyHotel'), ['class' => 'form-control mt-4 btn btn-primary']) !!}

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