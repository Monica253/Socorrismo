<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl leading-8 font-semibold mb-4">{{ __('Hotels list') }}</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($centros as $centro)
                    @isset($centro->image)
                        <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{Storage::url($centro->image->url)}})">
                    @else
                        <article class="w-full h-80 bg-cover bg-center" style="background-image: url({{asset('/imagenes/hotelFile.png')}})">
                    @endisset
                        <div class="w-full h-full px-8 flex flex-col justify-center">

                            <h1 class="text-4xl text-white leading-8 font-bold">
                                <a href="{{route('centros.show', $centro)}}">
                                    {{$centro->nombre}}
                                </a>
                            </h1>
                            
                            <div>
                                @foreach ($centro->piscina as $piscina)
                                    <a href="" class="inline-block px-3 h-6 bg-gray-600 text-white rounded-full">{{$piscina->nombre}}</a>
                                @endforeach
                            </div>
                        </div>
                </article>
            @endforeach

        </div>
    </div>

</x-app-layout>