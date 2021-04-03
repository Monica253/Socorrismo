@extends('adminlte::page')

@section('title', trans('validation.attributes.DUTitle'))

@section('content_header')
    <a class="btn btn-sm btn-secondary float-right" href="{{route('admin.users.index')}}">{{ __('Back to list') }}</a>
    <h1>{{ __('Details employee') }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-blue"><b>{{$user->name}} {{$user->apellidos}}</b></div>
        <div class="card-body">
            <h5>{{ __('Email') }}</h5>
            <p class="card-text">{{$user->email}}</p>
            <h5>{{ __('Birth date') }}</h5>
            <p class="card-text">{{$user->fecha_nacimiento}}</p>
            <h5>{{ __('Address') }}</h5>
            <p class="card-text">{{$user->direccion}}</p>
            <h5>{{ __('Postal code') }}</h5>
            <p class="card-text">{{$user->cod_postal}}</p>
            <h5>{{ __('Phone') }}</h5>
            <p class="card-text">{{$user->telefono}}</p>
            <h5>{{ __('Id Card') }}</h5>
            <p class="card-text">{{$user->dni}}</p>
            <h5>{{ __('Social Security Number') }}</h5>
            <p class="card-text">{{$user->num_seg_social}}</p>
            <h5>{{ __('Account Number') }}</h5>
            <p class="card-text">{{$user->num_cuenta}}</p>
            <h5>{{ __('Bank') }}</h5>
            <p class="card-text">{{$user->banco}}</p>
            <h5>{{ __('Entry Date') }}</h5>
            <p class="card-text">{{$user->fecha_alta}}</p>
            <h5>{{ __('Leaving Date') }}</h5>
            <p class="card-text">{{$user->fecha_baja}}</p>
        </div>
    </div>
@stop