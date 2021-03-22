@extends('adminlte::page')

@section('title', 'Employees')

@section('content_header')
    <h1>Users List</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            <a class="btn btn-success btn-sm" href="{{route('admin.users.create')}}">Create Employee</a>
        </div>

        <div class="card-body">
            <table class="table table-striped" id="users">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.users.show', $user)}}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}"><i class="fas fa-user-edit"></i></a>
                                <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-user-times"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop