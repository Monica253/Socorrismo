<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl text-gray-700 font-bold mb-4">{{ __('Hotels list') }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($centros as $centro)
                <a href="{{route('centros.show', $centro)}}">
                @isset($centro->image)
                    <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{Storage::url($centro->image->url)}})">
                @else
                    <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{asset('/imagenes/hotelFile.png')}})">
                @endisset
                    <div class="text-center bg-blue-500 bg-opacity-75">
                        <h1 class="text-4xl text-white font-bold">
                                {{$centro->nombre}}
                        </h1>
                        @foreach ($centro->piscina as $piscina)
                            <h1 class="px-3 inline-block text-white font-bold bg-gray-600 text-white rounded-full">
                                {{$piscina->nombre}}
                            </h1>
                        @endforeach
                    </div>
                </article></a>
            @endforeach
        </div>
    </div>

</x-app-layout>