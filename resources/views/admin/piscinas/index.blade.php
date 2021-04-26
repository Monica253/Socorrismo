@extends('adminlte::page')

@section('title', trans('validation.attributes.PoolTitle'))

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content_header')
    <a class="btn btn-sm btn-success float-right" href="{{route('admin.piscinas.create')}}">{{ __('Create pool') }}</a>
    <a class="btn btn-sm btn-danger float-right mr-2" href="{{ route('piscinasPDF') }}">{{ __('PDF') }}</a>
    <h1>{{ __('Pools list') }}</h1>
@stop

@section('content')
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
                                <a class="btn btn-danger btn-sm pull-left" href="#del{{$piscina->id}}" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <!-- Modal Para mostrar confirmación-->
                            <div class="modal fade" id="del{{$piscina->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-gradient-danger">
                                            <h4 class="modal-title" id="myModalLabel">{{ __('Delete Confirmation') }}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class=info>
                                                <i class="fas fa-exclamation-triangle text-danger"></i><h5 class="modal-title" id="exampleModalLabel">{{ __('Are you sure you want to remove this pool?') }}</h5>
                                                <h3>{{$piscina->nombre}} ({{$piscina->centro->nombre}})</h3>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal">{{ __('No, Cancel') }}</button>
                                            <form action="{{route('admin.piscinas.destroy', $piscina)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">{{ __('Yes, Delete') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    <script>
        $('#piscinas').DataTable({
            "language": {
                "lengthMenu": "{{ __('Display') }} _MENU_ {{ __('records per page') }}",
                "zeroRecords": "{{ __('Nothing found - sorry') }}",
                "emptyTable": "{{ __('No data available in table') }}",
                "info": "{{ __('Showing page') }} _PAGE_ {{ __('of') }} _PAGES_",
                "infoEmpty": "{{ __('No records available') }}",
                "infoFiltered": "({{ __('filtered from') }} _MAX_ {{ __('total records') }})",
                "loadingRecords": "{{ __('Loading...') }}",
                "processing":     "{{ __('Processing...') }}",
                "search":         "{{ __('Search:') }}",
                "paginate": {
                    "first":      "{{ __('First') }}",
                    "last":       "{{ __('Last') }}",
                    "next":       "{{ __('Next') }}",
                    "previous":   "{{ __('Previous') }}"
                },
            },
            columnDefs: [ {
                "targets"  : 'no-sort',
                "orderable": false,
            }],
            responsive: true,
            autoWidth: false
        });
    </script>
@endsection