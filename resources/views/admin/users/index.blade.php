@extends('adminlte::page')

@section('title', trans('validation.attributes.UserTitle'))

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')
    <h1>{{ __('Employees list') }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="employees">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Lastname') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th class="no-sort">{{ __('Phone') }}</th>
                        <th class="no-sort"></th>
                        <th class="no-sort"></th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->apellidos}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->telefono}}</td>
                            <td class="pr-0 pl-0">
                                <a class="btn btn-info btn-sm" href="{{route('admin.users.show', $user)}}"><i class="fas fa-eye"></i></a>
                            </td>
                            <td class="pr-0 pl-0">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}"><i class="fas fa-user-edit"></i></a>
                            </td>
                            <td class="pr-0 pl-0">
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
            $('#employees').DataTable( {
                columnDefs: [ {
                    "targets"  : 'no-sort',
                    "orderable": false,
                }],
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