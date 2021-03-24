@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create User</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'register']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Introduce user's name"]) !!}
                
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's email"]) !!}
                
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => "Introduce user's password"]) !!}
                
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

                {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop