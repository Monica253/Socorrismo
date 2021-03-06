<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<nav x-data="{ open: false }">
  <div class="ml-3 relative" x-data="{ dark: false, light: true }">
    <div x-show="light" class="bg-gray-300 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <!-- Mobile menu button-->
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--Icon when menu is closed.  Heroicon name: outline/menu
              Menu open: "hidden", Menu closed: "block"-->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--Icon when menu is open. Heroicon name: outline/x Menu open: "block", Menu closed: "hidden"-->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            <!--Logotipo-->
            <a href="/" class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-8 w-auto" src="/vendor/adminlte/dist/img/socorrismoIcon.png" alt="Workflow">
                <img class="hidden lg:block h-8 w-auto" src="/vendor/adminlte/dist/img/socorrismoIcon.png" alt="Workflow">
            </a>
            {{-- Men?? lg --}}
            <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" 
                    <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>-->
                    <a href="/" class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><i class="fas fa-home"></i></a>
                    <a href="/centros" class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Hotels') }}</a>
                    <a href="/piscinas" class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Pools') }}</a>
                    <a href="/calendar" class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Calendar') }}</a>
                </div>
            </div>
        </div>
        <button x-show="light" x-on:click="dark = true, light=false"><i class="fas fa-sun text-blue-500"></i></button>
        @auth
          <div class="ml-3 relative" x-data="{ dark: false, light: true }">
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{--Bot??n notificaci??n--}}
                <button x-show="light" x-on:click="dark = true, light=false" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                  
                <!--<button x-show="light" x-on:click="dark = true, light=false"><i class="fas fa-sun text-blue-500">Estoy claro</i></button><button x-show="dark" x-on:click="light=true, dark=false"><i class="fas fa-sun text-yellow-500">Estoy oscuro</i></button>
                  <h1 x-show="light" class="text-yellow-500">Estamos en clarito</h1>
                  <h1 x-show="dark" class="text-blue-500">Estamos en oscurito</h1>-->

                <!--Banderas dropdown-->
                <!--Comprobamos si el status esta a true y existe m??s de un lenguaje-->
                @if (config('locale.status') && count(config('locale.languages')) > 1)
                  <div class="ml-3 relative" x-data="{ open: false }">
                    <div>
                      <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                        <img src="/imagenes/{{App::getLocale()}}.png" width=40px height=40px></button>
                    </div>
                    <div x-show="open" x-on:click.away="open = false" class="z-10 origin-top-right absolute right-0 mt-2 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                      @foreach (array_keys(config('locale.languages')) as $lang)
                        @if ($lang != App::getLocale())
                            <a href="{!! route('lang.swap', $lang) !!}">
                              <img src="/imagenes/{!! $lang !!}.png">
                            </a>
                        @endif
                      @endforeach
                    </div>
                  </div>
                @endif
                <!-- Profile dropdown -->
                <div class="ml-3 relative" x-data="{ open: false }">
                    <div>
                    <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                    </button>
                    </div>
                    <!--Dropdown menu, show/hide based on menu state.
                    Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"-->
                    <div x-show="open" x-on:click.away="open = false" class="z-10 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                      <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ __('Your Profile') }}</a>
                      @can('admin.home')
                        <a href="{{route('admin.home')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ __('Dashboard') }}</a>
                      @endcan
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();
                          this.closest('form').submit();">{{ __('Sign out') }}</a>
                      </form>
                    </div>
                </div>
            </div>
        @else
            <div>
                <a href="{{route('login')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Login') }}</a>
                <a href="{{route('register')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Register') }}</a>
            </div>
        @endauth
      </div>
    </div>
  </div>

    <div x-show="dark" class="bg-gray-700 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <!-- Mobile menu button-->
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--Icon when menu is closed.  Heroicon name: outline/menu
              Menu open: "hidden", Menu closed: "block"-->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--Icon when menu is open. Heroicon name: outline/x Menu open: "block", Menu closed: "hidden"-->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            <!--Logotipo-->
            <a href="/" class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-8 w-auto" src="/vendor/adminlte/dist/img/socorrismoIcon.png" alt="Workflow">
                <img class="hidden lg:block h-8 w-auto" src="/vendor/adminlte/dist/img/socorrismoIcon.png" alt="Workflow">
            </a>
            {{-- Men?? lg --}}
            <div class="hidden sm:block sm:ml-6">
                <div x-show="light" class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" 
                    <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>-->
                    <a x-show="light" href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><i class="fas fa-home"></i></a>
                    <a x-show="light" href="/centros" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Hotels') }}</a>
                    <a x-show="light" href="/piscinas" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Pools') }}</a>
                    <a x-show="light" href="/calendar" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Calendar') }}</a>
                </div>
                <div x-show="dark" class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" 
                  <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>-->
                  <a x-show="dark"  href="/" class="text-gray-300 hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><i class="fas fa-home"></i></a>
                  <a x-show="dark" href="/centros" class="text-gray-300 hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Hotels') }}</a>
                  <a x-show="dark" href="/piscinas" class="text-gray-300 hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Pools') }}</a>
                  <a x-show="dark" href="/calendar" class="text-gray-300 hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Calendar') }}</a>
              </div>
            </div>
        </div>
        <button x-show="dark" x-on:click="light=true, dark=false"><i class="fas fa-sun text-yellow-500"></i></button>
        @auth
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{--Bot??n notificaci??n--}}
                {{--<button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>--}}

                <!--Banderas dropdown-->
                <!--Comprobamos si el status esta a true y existe m??s de un lenguaje-->
                @if (config('locale.status') && count(config('locale.languages')) > 1)
                  <div class="ml-3 relative" x-data="{ open: false }">
                    <div>
                      <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                        <img src="/imagenes/{{App::getLocale()}}.png" width=40px height=40px></button>
                    </div>
                    <div x-show="open" x-on:click.away="open = false" class="z-10 origin-top-right absolute right-0 mt-2 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                      @foreach (array_keys(config('locale.languages')) as $lang)
                        @if ($lang != App::getLocale())
                            <a href="{!! route('lang.swap', $lang) !!}">
                              <img src="/imagenes/{!! $lang !!}.png">
                            </a>
                        @endif
                      @endforeach
                    </div>
                  </div>
                @endif
                <!-- Profile dropdown -->
                <div class="ml-3 relative" x-data="{ open: false }">
                    <div>
                    <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                    </button>
                    </div>
                    <!--Dropdown menu, show/hide based on menu state.
                    Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"-->
                    <div x-show="open" x-on:click.away="open = false" class="z-10 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                      <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ __('Your Profile') }}</a>
                      @can('admin.home')
                        <a href="{{route('admin.home')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ __('Dashboard') }}</a>
                      @endcan
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault();
                          this.closest('form').submit();">{{ __('Sign out') }}</a>
                      </form>
                    </div>
                </div>
            </div>
        @else
            <div>
                <a href="{{route('login')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Login') }}</a>
                <a href="{{route('register')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Register') }}</a>
            </div>
        @endauth
      </div>
    </div>
  </div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      {{-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a> --}}
      <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><i class="fas fa-home"></i></a><br><br>
      <a href="/centros" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Hotels') }}</a><br><br>
      <a href="/piscinas" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Pools') }}</a><br><br>
      <a href="/calendar" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ __('Calendar') }}</a>
    </div>
  </div>
</nav>
  