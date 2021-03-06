@extends('adminlte::page')

@section('title', trans('validation.attributes.DPTitle'))

@section('content_header')
    <a class="btn btn-sm btn-secondary float-right" href="{{route('admin.piscinas.index')}}">{{ __('Back to list') }}</a>
    <h1>{{ __('Details pool') }}</h1>
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
        <div class="card-header bg-blue"><b>{{$piscina->nombre}}</b></div>
        <div class="card-body">
            <div class="image-wrapper">
                @isset($piscina->image)
                    <img class="float-right object-cover object-center" src="{{Storage::url($piscina->image->url)}}" alt="">
                @else
                    <img class="float-right object-cover object-center" src="{{asset('/imagenes/piscinaEjemplo.png')}}" alt="">
                @endisset
            </div>
            <div class="float-left w-50">
                <h5>Hotel</h5>
                <p class="card-text"><a href="{{route('admin.centros.show', $piscina->centro->slug)}}">{{$piscina->centro->nombre}}</p></a>
                <h5>{{ __('Remarks') }}</h5>          
                <p class="card-text">{{$piscina->observaciones}}</p>
            </div>
        </div>
    </div>
@stop