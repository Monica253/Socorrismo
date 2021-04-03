@extends('adminlte::page')

@section('title', trans('validation.attributes.EUTitle'))

@section('content_header')
    <a class="btn btn-sm btn-secondary float-right" href="{{route('admin.users.index')}}">{{ __('Back to list') }}</a>
    <h1>{{ __('Edit user role') }}</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Introduce user's name", 'readonly']) !!}
                
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Introduce employee's email", 'readonly']) !!}
                
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <h2 class="h5">Roles list</h2>
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach

                {!! Form::submit(trans('validation.attributes.ModifyUser'), ['class' => 'form-control mt-4 btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
