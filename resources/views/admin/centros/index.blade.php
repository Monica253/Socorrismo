@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

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
            <table class="table table-striped" id="centros">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Hotel Company</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>timetables</th>
                        <th></th>
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
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.centros.show', $centro)}}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.centros.edit', $centro)}}">Edit</a>
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

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#centros').DataTable({
            responsive: true,
            autoWidth: false
        });
    </script>
@endsection