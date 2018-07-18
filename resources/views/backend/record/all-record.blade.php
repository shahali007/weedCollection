@extends('backend.app')

@section('title', 'All Record')
@section('custom-css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('content')
    @if(session()->has('successMsg'))
        <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> {{ session('successMsg') }}
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-8">
                    <div class="block-header">
                        <ol class="breadcrumb breadcrumb-col-grey">
                            <li><a href="javascript:void(0);">Total People ({{ $records->count() }})</a></li>
                            <li><a href="javascript:void(0);">Total Amount ({{ $records->sum('amount') }})</a></li>
                            <li><a href="javascript:void(0);">Average Per ({{ floor($records->sum('amount')/$records->count()) }})</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-right">
                        <a href="{{ url('record/create') }}" class="btn btn-default waves-effect waves-float">
                            <span>Add New Record</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="myTable1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($records as $key => $record)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $record->name }}</td>
                                            <td>{{ $record->address }}</td>
                                            <td>{{ $record->amount }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
@endsection

@section('custom-js')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin-asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script>
        $(function () {
            //Exportable table
            $('.js-exportable').DataTable({
                dom: 'Bfrtip',
                responsive: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                paging : false
            });
        });
    </script>
@endsection