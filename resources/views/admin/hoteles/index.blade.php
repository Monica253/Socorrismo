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
            <a class="btn btn-success btn-sm" href="{{route('admin.hoteles.create')}}">Create Hotel</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hoteles as $hotel)
                        <tr>
                            <td>{{$hotel->id}}</td>
                            <td>{{$hotel->nombre}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.hoteles.edit', $hotel)}}">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.hoteles.destroy', $hotel)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        dd($hotel);
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
