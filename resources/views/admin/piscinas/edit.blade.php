@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Pool</h1>
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
            {!! Form::model($piscina, ['route' => ['admin.piscinas.update', $piscina], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Name') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => "Introduce pool's name"]) !!}
                    
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('centro_id', 'Hotel') !!}
                    {!! Form::select('centro_id', $centros, null, ['class' => 'form-control', 'placeholder' => "Select Hotel's name"]) !!}
                    
                    @error('centro_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Photo') !!}
                            {!! Form::file('file', ['class' => 'form-control-file']) !!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-wrapper">
                            <img id="picture" src="{{Storage::url($piscina->image->url)}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('observaciones', 'Remarks') !!}
                    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'placeholder' => "Introduce Pool's remarks"]) !!}
                    
                    @error('observaciones')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => "Pool's slug", 'readonly']) !!}
                
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Modify Pool', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create( document.querySelector( '#observaciones' ) )
            .catch( error => {
                console.error( error );
            });
    </script>

@endsection