@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Hotels List</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn-success btn-sm" href="{{route('admin.centros.create')}}">Create Hotel</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Hotel Company</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>timetables</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($centros as $centro)
                        <tr>
                            <td>{{$centro->id}}</td>
                            <td>{{$centro->nombre}}</td>
                            <td>{{$centro->cadena_hotelera}}</td>
                            <td>{{$centro->email}}</td>
                            <td>{{$centro->telefono}}</td>
                            <td>{{$centro->direccion}}</td>
                            <td>{{$centro->horarios}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.centros.edit', $centro)}}">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.centros.destroy', $centro)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
