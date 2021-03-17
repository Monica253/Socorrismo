@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

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
            <table class="table table-striped" id="piscinas">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Hotel</th>
                        <th>Remarks</th>
                        <th></th>
                        <th></th>
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
                                <a class="btn btn-primary btn-sm" href="{{route('admin.piscinas.show', $piscina)}}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.piscinas.edit', $piscina)}}">Edit</a>
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

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#piscinas').DataTable({
            responsive: true,
            autoWidth: false
        });
    </script>
@endsection