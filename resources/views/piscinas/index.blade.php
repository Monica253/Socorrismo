<x-app-layout>
    <div>
        <div class="w-full py-2">
            <h1 class="text-4xl text-gray-700 mb-2 mt-2 text-center">{{ __('Pools list') }}</h1>
        </div>
        <div class="sm:px-6 lg:px-8 mt-2 animate__animated animate__fadeInUp grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($piscinas as $piscina)
                <a href="{{route('piscinas.show', $piscina)}}">
                    @isset($piscina->image)
                        <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{Storage::url($piscina->image->url)}})">
                    @else
                        <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{asset('/imagenes/piscinaEjemplo.png')}})">
                    @endisset
                        <div class="text-center bg-blue-500 bg-opacity-75">
                            <h1 class="text-4xl text-white font-bold">
                                    {{$piscina->nombre}}
                            </h1>
                        </div>
                    </article></a>
            @endforeach
        </div>
    </div>

</x-app-layout>