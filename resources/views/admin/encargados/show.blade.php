@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Details Manager</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header"><b>{{$encargado->nombre}} {{$encargado->apellidos}}</b></div>
        <div class="card-body">
            <h5 class="card-title">Id Number</h5>          
            <p class="card-text">{{$encargado->dni}}</p>
            <h5 class="card-title">Birth Date</h5>
            <p class="card-text">{{$encargado->f_nacimiento}}</p>
            <h5 class="card-title">Phone Number</h5>
            <p class="card-text">{{$encargado->telefono}}</p>
            <h5 class="card-title">Email</h5>
            <p class="card-text">{{$encargado->email}}</p>
            <h5 class="card-title">Address</h5>
            <p class="card-text">{{$encargado->direccion}}</p>
            <h5 class="card-title">Postal Code</h5>          
            <p class="card-text">{{$encargado->cod_postal}}</p>
            <h5 class="card-title">Social Security Number</h5>          
            <p class="card-text">{{$encargado->num_seg_social}}</p>
            <h5 class="card-title">Account Number</h5>          
            <p class="card-text">{{$encargado->num_cuenta}}</p>
            <h5 class="card-title">Bank</h5>          
            <p class="card-text">{{$encargado->banco}}</p>
            <h5 class="card-title">Entry Date</h5>          
            <p class="card-text">{{$encargado->fecha_alta}}</p>
            <h5 class="card-title">Leaving Date</h5>          
            <p class="card-text">{{$encargado->fecha_baja}}</p>
        </div>
    </div>
@stop
