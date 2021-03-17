@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Details Pool</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header"><b>{{$piscina->nombre}}</b></div>
        <div class="card-body">
                @if($piscina->image)
                    <img class="float-right w-full h-72 object-cover object-center" src="{{Storage::url($piscina->image->url)}}" alt="">
                @else
                    <img class="float-right w-50 object-cover object-center" src="https://cadenaser00.epimg.net/ser/imagenes/2019/04/02/viajes/1554221046_501590_1554223201_sumario_normal.jpg" alt="">
                @endif
            <div class="float-left">
                <h5 class="card-title">Hotel</h5>
                <p class="card-text"><a href="{{route('admin.centros.show', $piscina->centro->slug)}}">{{$piscina->centro->nombre}}</p></a>
                <h5 class="card-title">Remarks</h5>          
                <p class="card-text">{{$piscina->observaciones}}</p>
            </div>
        </div>
    </div>
@stop