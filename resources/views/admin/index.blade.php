@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ __('Admin panel') }}</h1>
@stop

@section('content')
    <div class="row w-100 mt-2 mb-2 ml-2">
        <div class="col-sm-3">
            <img src="https://www.waimea.school.nz/wp-content/uploads/2020/04/muliple-Users.png" class="w-100" alt="">
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Users management') }}</div>
                <div class="card-body">
                    <p class="card-text">{{ __('From here you can manage the employees of the application:') }}</p>
                    <li class="card-text">{{ __('View details') }}</li>
                    <li class="card-text">{{ __('Edit') }}</li>
                    <li class="card-text">{{ __('Delete') }}</li>
                </div>
                <div class="card-footer">
                    <p class="card-text">{{ __('Remember that to register users you must log out and create them from the registration form.') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!--**************************-->
    <div class="row w-100 mt-2 mb-2 ml-2">
        <div class="col-sm-3">
            <img src="https://icon-library.com/images/hotel-icon/hotel-icon-5.jpg" class="w-100" alt="">
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header bg-primary bg-primary">{{ __('Hotels management') }}</div>
                <div class="card-body">
                    <p class="card-text">{{ __('This is where the hotels with which the company works are managed:') }}</p>
                    <li class="card-text">{{ __('Register new hotels') }}</li>
                    <li class="card-text">{{ __('View details') }}</li>
                    <li class="card-text">{{ __('Edit') }}</li>
                    <li class="card-text">{{ __('Delete') }}</li>
                </div>
                <div class="card-footer">
                    <p class="card-text">{{ __('Remember to enter the latitude and longitude of the hotel so that the map is generated and employees can locate the hotel.') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!--**************************-->
    <div class="row w-100 mt-2 mb-2 ml-2">
        <div class="col-sm-3">
            <img src="https://i.pinimg.com/originals/39/b7/83/39b7837625da3230df4e0d83ea0d31f4.png" class="w-100" alt="">
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Pools management') }}</div>
                <div class="card-body">
                    <p class="card-text">{{ __('This is where the pools where lifeguards work are managed:') }}</p>
                    <li class="card-text">{{ __('Register new pools') }}</li>
                    <li class="card-text">{{ __('View details') }}</li>
                    <li class="card-text">{{ __('Edit') }}</li>
                    <li class="card-text">{{ __('Delete') }}</li>
                </div>
                <div class="card-footer">
                    <p class="card-text">{{ __('If there is any information you need to know about the pool, please note it in the remarks section.') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!--**************************-->
    <div class="row w-100 mt-2 mb-2 ml-2">
        <div class="col-sm-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Google_Calendar_icon.svg/493px-Google_Calendar_icon.svg.png" class="w-100" alt="">
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Timetables management') }}</div>
                <div class="card-body">
                    <p class="card-text">{{ __("Section where workers' working days are organised:") }}</p>
                    <li class="card-text">{{ __('Add employee working days') }}</li>
                    <li class="card-text">{{ __('View details') }}</li>
                    <li class="card-text">{{ __('Edit') }}</li>
                    <li class="card-text">{{ __('Delete') }}</li>
                </div>
                <div class="card-footer">
                    <p class="card-text">{{ __('Specify the employee, and the hotel, the pool and the hours he/she will be there.') }}</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop