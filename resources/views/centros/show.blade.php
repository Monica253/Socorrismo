<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-20 py-8">
        <h1 class="text-4xl text-gray-600 font-bold">{{$centro->nombre}}</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    @isset($centro->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($centro->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="{{asset('/imagenes/hotelFile.png')}}" alt="">
                    @endisset
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    <h5 class="card-title py-2 font-bold">{{ __('Hotel company') }}</h5>          
                    <p class="card-text">{{$centro->cadena_hotelera}}</p>
                    <h5 class="card-title py-2 font-bold">{{ __('Email') }}</h5>          
                    <p class="card-text">{{$centro->email}}</p>
                    <h5 class="card-title py-2 font-bold">{{ __('Phone') }}</h5>          
                    <p class="card-text">{{$centro->telefono}}</p>
                    <h5 class="card-title py-2 font-bold">{{ __('Address') }}</h5>          
                    <p class="card-text">{{$centro->direccion}}</p>
                    <h5 class="card-title py-2 font-bold">{{ __('Timetable') }}</h5>        
                    <p class="card-text">{{$centro->horarios}}</p>
                </div>
                <h5 class="card-title py-2 font-bold text-base text-gray-500">{{ __('Map') }}</h5>
                <div id="myMap" class="h-80"></div>
            </div>

            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">{{ __('Pools') }}</h1>
                <ul>
                    @foreach ($centro->piscina as $piscina)
                        <li class="mb-4">
                            <a class="flex" href="{{route('piscinas.show', $piscina)}}">
                                @isset($piscina->image)
                                    <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($piscina->image->url)}}" alt="">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="{{asset('/imagenes/piscinaEjemplo.png')}}" alt="">
                                @endisset
                                <span class="ml-2 text-gray-600">{{$piscina->nombre}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>

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