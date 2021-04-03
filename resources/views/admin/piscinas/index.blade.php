@extends('adminlte::page')

@section('title', trans('validation.attributes.PoolTitle'))

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')
    <a class="btn btn-sm btn-success float-right" href="{{route('admin.piscinas.create')}}">{{ __('Create pool') }}</a>
    <h1>{{ __('Pools list') }}</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="piscinas">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('Name') }}</th>
                        <th>Hotel</th>
                        <th class="no-sort">{{ __('Remarks') }}</th>
                        <th class="no-sort"></th>
                        <th class="no-sort"></th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($piscinas as $piscina)
                        <tr>
                            <td>{{$piscina->id}}</td>
                            <td>{{$piscina->nombre}}</td>
                            <td>{{$piscina->centro->nombre}}</td>
                            <td>{{$piscina->observaciones}}</td>
                            <td class="pr-0 pl-0">
                                <a class="btn btn-info btn-sm" href="{{route('admin.piscinas.show', $piscina)}}"><i class="fas fa-eye"></i></a>
                            </td>
                            <td class="pr-0 pl-0">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.piscinas.edit', $piscina)}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="pr-0 pl-0">
                                <form action="{{route('admin.piscinas.destroy', $piscina)}}" method="POST">
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
        $('#piscinas').DataTable({
            columnDefs: [ {
                "targets"  : 'no-sort',
                "orderable": false,
            }],
            responsive: true,
            autoWidth: false
        });

        ClassicEditor
            .create( document.querySelector( '#observaciones' ) )
            .catch( error => {
                console.error( error );
            });
    </script>
@endsection