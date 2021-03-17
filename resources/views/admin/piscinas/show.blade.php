@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Details Pool</h1>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 20%;
            width: 40%;
            float: right;
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
    <div class="card">
        <div class="card-header"><b>{{$piscina->nombre}}</b></div>
        <div class="card-body">
            <div class="image-wrapper">
                @if($piscina->image)
                    <img class="float-right w-full h-72 object-cover object-center" src="{{Storage::url($piscina->image->url)}}" alt="">
                @else
                    <img class="float-right w-50 object-cover object-center" src="https://yaiza.es/wp-content/uploads/2012/09/Princesa-Yaiza-entrada-web.-jpg.jpg" alt="">
                @endif
            </div>
            <div class="float-left">
                <h5 class="card-title">Hotel</h5>
                <p class="card-text"><a href="{{route('admin.centros.show', $piscina->centro->slug)}}">{{$piscina->centro->nombre}}</p></a>
                <h5 class="card-title">Remarks</h5>          
                <p class="card-text">{{$piscina->observaciones}}</p>
            </div>
        </div>
    </div>
@stop