<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<x-app-layout>
    <div id="container" class="sm:px-6 lg:px-8 mt-4 animate__animated animate__fadeInUp grid">
        <div class="mb-4 border-2 border-blue-600 shadow-lg">
                <p class="ml-2 text-lg">{{ __('If you have any problems or questions about anything, here is the contact information for the people in charge of the company, they will be able to help you:') }}</p>
                <li class="ml-2 list-none"><i class="fas fa-phone-square-alt text-green-900"></i><b> 699659765</b> - Mónica Betancort Hernández</li>
                <li class="ml-2 list-none"><i class="fas fa-phone-square-alt text-green-900"></i><b> 666655565</b> - Admin</li>
        </div>

        <div class="mb-6 border-2 border-blue-600 shadow-lg">
            <p class="ml-2 text-lg">{{ __('In the calendar section you will be able to see only your working days. On the right side, the same days will appear in a list, which can be filtered by week and year. By clicking on the color label of the day (in the calendar or list) you can see its detailed information in another way.') }}</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 gap-4">
            <a href="/centros"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-300 h-10 text-3xl">{{ __('Hotels') }}</p>
                <i class="fas fa-hotel text-7xl mt-10 text-blue-900"></i><br>
                <i class="fas fa-arrow-circle-right mt-10"></i>
            </div></a>
            <a href="/piscinas"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-300 h-10 text-3xl">{{ __('Pools') }}</p>
                <i class="fas fa-swimming-pool text-7xl mt-10 text-blue-700"></i><br>
                <i class="fas fa-arrow-circle-right mt-10"></i>
            </div></a>
            <a href="/calendar"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-300 h-10 text-3xl">{{ __('Calendar') }}</p>
                <i class="far fa-calendar-alt text-7xl mt-10 text-indigo-900"></i><br>
                <i class="fas fa-arrow-circle-right mt-10"></i>
            </div></a>
            <a href="/user/profile"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-300 h-10 text-3xl">{{ __('Profile') }}</p>
                <i class="far fa-id-card text-7xl mt-10 text-green-800"></i><br>
                <i class="fas fa-arrow-circle-right mt-10"></i>
            </div></a>
            @can('admin.home')
                <a href="{{route('admin.home')}}"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                    <p class="bg-gray-300 h-10 text-3xl">{{ __('Dashboard') }}</p>
                    <i class="fas fa-user-shield text-7xl mt-10 text-gray-800"></i><br>
                    <i class="fas fa-arrow-circle-right mt-10"></i>
                </div></a>
            @endcan
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-300 h-10 text-3xl">{{ __('Sign out') }}</p>
                <i class="fas fa-sign-out-alt text-7xl mt-10 text-red-700"></i>
            </div></a>
            </form>
            
        </div>
    </div>
</x-app-layout>