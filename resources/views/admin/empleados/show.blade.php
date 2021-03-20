@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Details Employee</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header"><b>{{$empleado->nombre}} {{$empleado->apellidos}}</b></div>
        <div class="card-body">
            <h5 class="card-title">Id Number</h5>          
            <p class="card-text">{{$empleado->dni}}</p>
            <h5 class="card-title">Birth Date</h5>
            <p class="card-text">{{$empleado->fecha_nacimiento}}</p>
            <h5 class="card-title">Phone Number</h5>
            <p class="card-text">{{$empleado->telefono}}</p>
            <h5 class="card-title">Email</h5>
            <p class="card-text">{{$empleado->email}}</p>
            <h5 class="card-title">Address</h5>
            <p class="card-text">{{$empleado->direccion}}</p>
            <h5 class="card-title">Postal Code</h5>          
            <p class="card-text">{{$empleado->cod_postal}}</p>
            <h5 class="card-title">Social Security Number</h5>          
            <p class="card-text">{{$empleado->num_seg_social}}</p>
            <h5 class="card-title">Account Number</h5>          
            <p class="card-text">{{$empleado->num_cuenta}}</p>
            <h5 class="card-title">Bank</h5>          
            <p class="card-text">{{$empleado->banco}}</p>
            <h5 class="card-title">Entry Date</h5>          
            <p class="card-text">{{$empleado->fecha_alta}}</p>
            <h5 class="card-title">Leaving Date</h5>          
            <p class="card-text">{{$empleado->fecha_baja}}</p>
        </div>
    </div>
@stop
