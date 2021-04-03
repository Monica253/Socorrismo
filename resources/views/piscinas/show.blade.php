<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-20 py-8">
        <h1 class="text-4xl text-gray-600 font-bold">{{$piscina->nombre}}</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    @isset($piscina->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($piscina->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="{{asset('/imagenes/piscinaEjemplo.png')}}" alt="">
                    @endisset
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    <h5 class="card-title py-2 font-bold">Hotel</h5>
                    <p class="card-text"><a href="{{route('centros.show', $piscina->centro->slug)}}">{{$piscina->centro->nombre}}</p></a>
                    <h5 class="card-title py-2 font-bold">{{ __('Remarks') }}</h5>          
                    <p class="card-text">{{$piscina->observaciones}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>