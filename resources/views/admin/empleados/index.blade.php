@extends('adminlte::page')

@section('title', 'Employees')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')
    <h1>Employees List</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn-success btn-sm" href="{{route('admin.empleados.create')}}">Create Employee</a>
        </div>

        <div class="card-body">
            <table class="table table-striped" id="empleados">
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
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->id}}</td>
                            <td>{{$empleado->nombre}}</td>
                            <td>{{$empleado->f_nacimiento}}</td>
                            <td>{{$empleado->telefono}}</td>
                            <td>{{$empleado->email}}</td>
                            <td>{{$empleado->dni}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.empleados.show', $empleado)}}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.empleados.edit', $empleado)}}"><i class="fas fa-user-edit"></i></a>
                                <form action="{{route('admin.empleados.destroy', $empleado)}}" method="POST">
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#empleados').DataTable( {
                responsive: true,
                autoWidth: false,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        messageTop: 'PDF with employees list'
                    }
                ]
            } );
        } );
    </script>
@endsection