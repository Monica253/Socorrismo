@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Details User</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header"><b>{{$user->name}}</b></div>
        <div class="card-body">
            <h5 class="card-title">Email</h5>
            <p class="card-text">{{$user->email}}</p>
        </div>
    </div>
@stop
