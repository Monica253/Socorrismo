@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create new role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role´s name']) !!}
                </div>

                <h2 class="h3">Permissions list</h2>
                @foreach ($permissions as $permission)
                    <div>
                        <label>
                            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                            {{$permission->name}}
                        </label>
                    </div> 
                @endforeach

                {!! Form::submit('Create Role', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
