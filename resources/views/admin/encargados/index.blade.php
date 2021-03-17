@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

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
            <table class="table table-striped" id="encargados">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Birth Date</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Id Number</th>
                        <th></th>
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
                                <a class="btn btn-primary btn-sm" href="{{route('admin.encargados.show', $encargado)}}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.encargados.edit', $encargado)}}"><i class="fas fa-user-edit"></i></a>
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

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#encargados').DataTable({
            responsive: true,
            autoWidth: false
        });
    </script>
@endsection