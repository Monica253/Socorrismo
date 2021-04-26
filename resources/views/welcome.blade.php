<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<x-app-layout>
    <div class="w-full py-2 bg-gradient-to-r from-blue-500 via-blue-200 to-blue-500">
        <h1 class="text-5xl text-gray-700 mb-2 mt-2 text-center">{{ __('Home') }}</h1>
    </div>
    <div id="container" class="sm:px-6 lg:px-8 mt-2 animate__animated animate__fadeInUp grid">
        <div class="mb-4 border-2 border-blue-600 rounded-b-lg">
            <div class="text-xl bg-blue-500 bg-opacity-50 font-bold"><i class="ml-2 far fa-bell text-yellow-200"></i> {{ __('Important') }}</div>
            <div>
                <p class="ml-2 text-lg">{{ __('If you have any problems or questions about anything, here is the contact information for the people in charge of the company, they will be able to help you:') }}</p>
                <li class="ml-2 list-none"><i class="fas fa-address-card text-blue-900"></i><b> Mónica Betancort Hernández - <i class="fas fa-phone-square-alt text-green-900"></i> 699659765</b></li>
                <li class="ml-2 list-none"><i class="fas fa-address-card text-blue-900"></i><b> Admin Admin - <i class="fas fa-phone-square-alt text-green-900"></i> 666655565</b></li>
            </div>
        </div>

        <div class="mb-6 border-2 border-blue-600 rounded-b-lg">
            <div class="text-xl bg-blue-500 bg-opacity-50 font-bold"><i class="ml-2 far fa-calendar-alt text-indigo-500"></i> {{ __('Calendar') }}</div>
            <div>
                <p class="ml-2 text-lg">{{ __('In the calendar section you will be able to see only your working days, and filter them by day and month. On the right hand side you will see your working days displayed in a list, which can also be filtered by week and year. By clicking on the information of the working day (calendar or list) you can see its detailed information in another way.') }}</p>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 gap-4">
            <a href="/centros"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-400 h-10 text-3xl">{{ __('Hotels') }}</p>
                <i class="fas fa-hotel text-7xl mt-10 text-blue-900"></i><br>
                <i class="fas fa-arrow-circle-right mt-10"></i>
            </div></a>
            <a href="/piscinas"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-400 h-10 text-3xl">{{ __('Pools') }}</p>
                <i class="fas fa-swimming-pool text-7xl mt-10 text-blue-700"></i><br>
                <i class="fas fa-arrow-circle-right mt-10"></i>
            </div></a>
            <a href="/calendar"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-400 h-10 text-3xl">{{ __('Calendar') }}</p>
                <i class="far fa-calendar-alt text-7xl mt-10 text-indigo-900"></i><br>
                <i class="fas fa-arrow-circle-right mt-10"></i>
            </div></a>
            <a href="/user/profile"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-400 h-10 text-3xl">{{ __('Profile') }}</p>
                <i class="far fa-id-card text-7xl mt-10 text-green-800"></i><br>
                <i class="fas fa-arrow-circle-right mt-10"></i>
            </div></a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();"><div class="border-4 border-blue-600 rounded-lg text-center sm:text-center h-60">
                <p class="bg-gray-400 h-10 text-3xl">{{ __('Sign out') }}</p>
                <i class="fas fa-sign-out-alt text-7xl mt-10 text-red-700"></i>
            </div></a>
            </form>
            
        </div>
    </div>
</x-app-layout>