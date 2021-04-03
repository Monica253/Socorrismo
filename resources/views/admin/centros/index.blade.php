@extends('adminlte::page')

@section('title', trans('validation.attributes.HotelTitle'))

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')
    <a class="btn btn-sm btn-success float-right" href="{{route('admin.centros.create')}}">{{ __('Create hotel') }}</a>
    <h1>{{ __('Hotels list') }}</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="centros">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th class="no-sort">{{ __('Phone') }}</th>
                        <th class="no-sort">{{ __('Timetable') }}</th>
                        <th class="no-sort"></th>
                        <th class="no-sort"></th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($centros as $centro)
                        <tr>
                            <td>{{$centro->id}}</td>
                            <td>{{$centro->nombre}}</td>
                            <td>{{$centro->email}}</td>
                            <td>{{$centro->telefono}}</td>
                            <td>{{$centro->horarios}}</td>
                            <td class="pr-0 pl-0">
                                <a class="btn btn-info btn-sm" href="{{route('admin.centros.show', $centro)}}"><i class="fas fa-eye"></i></a>
                            </td>
                            <td class="pr-0 pl-0">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.centros.edit', $centro)}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="pr-0 pl-0">
                                <form action="{{route('admin.centros.destroy', $centro)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#centros').DataTable({
            columnDefs: [ {
                "targets"  : 'no-sort',
                "orderable": false,
            }],
            responsive: true,
            autoWidth: false
        });
    </script>
@endsection