<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-20 py-8">
        <h1 class="text-4xl text-gray-600 font-bold">{{ __('Details of laboral day') }}</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="text-base text-gray-500 mt-4">
                <div class="flex flex-row">
                    <div class="mr-4">
                        <h5 class="card-title py-2 font-bold">Hotel</h5>
                        <p class="card-text mb-2">{{$dia->centro->nombre}}</p>
                        @isset($dia->centro->image)
                            <img class="w-40 object-cover object-center" src="{{Storage::url($dia->centro->image->url)}}" alt="">
                        @else
                            <img class="w-40 object-cover object-center" src="{{asset('/imagenes/hotelFile.png')}}" alt="">
                        @endisset
                    </div>
                    <div class="ml-2">
                        <h5 class="card-title py-2 font-bold">{{ __('Pool') }}</h5>
                        <p class="card-text mb-2">{{$dia->piscina->nombre}}</p>
                        @isset($dia->piscina->image)
                            <img class="w-40 object-cover object-center" src="{{Storage::url($dia->piscina->image->url)}}" alt="">
                        @else
                            <img class="w-40 object-cover object-center" src="{{asset('/imagenes/piscinaEjemplo.png')}}" alt="">
                        @endisset
                    </div>
                </div>
                <div class="flex flex-row mt-4">
                    <div class="mr-4">
                        <h5 class="card-title py-2 font-bold">{{ __('From') }}</h5>          
                        <p class="card-text">{{date('d-m-Y', strtotime($dia->fecha_inicio))}}</p>
                    </div>
                    <div class="ml-4 mr-4">
                        <h5 class="card-title py-2 font-bold">{{ __('To') }}</h5>        
                        <p class="card-text">{{date('d-m-Y', strtotime($dia->fecha_fin))}}</p>
                    </div>
                    <div class="ml-4">
                        <h5 class="card-title py-2 font-bold">{{ __('Timetable') }}</h5>          
                        <p class="card-text">{{$dia->centro->horarios}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

