@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pools List</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn-success btn-sm" href="{{route('admin.piscinas.create')}}">Create Pool</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Hotel</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($piscinas as $piscina)
                        <tr>
                            <td>{{$piscina->id}}</td>
                            <td>{{$piscina->nombre}}</td>
                            <td>{{$piscina->centro->nombre}}</td>
                            <td>{{$piscina->observaciones}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.piscinas.edit', $piscina)}}">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.piscinas.destroy', $piscina)}}" method="POST">
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
