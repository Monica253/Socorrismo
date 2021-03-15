@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Managers List</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn-success btn-sm" href="{{route('admin.encargados.create')}}">Create Manager</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Birth Date</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Id Number</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($encargados as $encargado)
                        <tr>
                            <td>{{$encargado->id}}</td>
                            <td>{{$encargado->nombre}}</td>
                            <td>{{$encargado->f_nacimiento}}</td>
                            <td>{{$encargado->telefono}}</td>
                            <td>{{$encargado->email}}</td>
                            <td>{{$encargado->dni}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.encargados.edit', $encargado)}}">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.encargados.destroy', $encargado)}}" method="POST">
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
