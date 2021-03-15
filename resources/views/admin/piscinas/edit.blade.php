@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Pool</h1>
@stop

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
                    {!! Form::label('hotel_id', 'Hotel id') !!}
                    {!! Form::text('hotel_id', null, ['class' => 'form-control', 'placeholder' => "Introduce Hotel's name"]) !!}
                    
                    @error('hotel_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

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