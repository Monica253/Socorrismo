<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl text-gray-700 font-bold mb-4">{{ __('Pools list') }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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