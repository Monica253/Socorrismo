@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Details Hotel</h1>
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
        <div class="card-header"><b>{{$centro->nombre}}</b></div>
        <div class="card-body">
            <div class="image-wrapper">
                @if($centro->image)
                    <img class="float-right object-cover object-center" src="{{Storage::url($centro->image->url)}}" alt="">
                @else
                    <img class="float-right object-cover object-center" src="https://yaiza.es/wp-content/uploads/2012/09/Princesa-Yaiza-entrada-web.-jpg.jpg" alt="">
                @endif
            </div>
            <div class="float-left">
                <h5 class="card-title">Hotel Company</h5>          
                <p class="card-text">{{$centro->cadena_hotelera}}</p>
                <h5 class="card-title">Email</h5>          
                <p class="card-text">{{$centro->email}}</p>
                <h5 class="card-title">Contact</h5>          
                <p class="card-text">{{$centro->telefono}}</p>
                <h5 class="card-title">Address</h5>          
                <p class="card-text">{{$centro->direccion}}</p>
            </div>
        </div>
        <div id="myMap" style="position:relative;width:600px;height:400px;"></div>
    </div>
@stop

@section('js')
    <script type='text/javascript'
src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&setMkt=da-DK&setLang=da&branch=[experimental]&key=Ag0-_baxFaDezcZq9RB__IW_DeP4LkiJSw8-eH8L-8VE3F_cks4kl8j3rjsYIvt-' async defer></script>
    <script>
        function GetMap()
        {
            var lat={{$centro->latitud}};
            var long={{$centro->longitud}};
            var map = new Microsoft.Maps.Map(
                document.getElementById('myMap'),
                {
                    /* No need to set credentials if already passed in URL */
                    credentials: 'Ag0-_baxFaDezcZq9RB__IW_DeP4LkiJSw8-eH8L-8VE3F_cks4kl8j3rjsYIvt-',
                    center: new Microsoft.Maps.Location(lat, long),
                    mapTypeId: Microsoft.Maps.MapTypeId.aerial,
                    zoom: 18
                }
            );
        }
        GetMap();
    </script>
@endsection