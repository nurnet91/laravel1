@extends('admin.layout.app')

@include('admin.common.datatable')

@section('script')
    <script>
        $('#GridTable').DataTable({
            "processing": true,
            "serverSide": true,
            // "searchable": false,
            "ajax": '{{ url($action."/data") }}',
            "columns": [
                {
                    data: null, 
                    name: 'foto',
                    render: function(data, type, row) {
                        return getfoto(data.foto);
                    }
                },
                {data: 'title', name: 'title'},
                {
                    data: null, 
                    name: 'gallery_id',
                    render: function(data, type, row) {
                        return getformatteddate(data.gallery_id);
                    }
                },
                {
                    data: null, 
                    name: 'date',
                    render: function(data, type, row) {
                        return getformatteddate(data.date);
                    }
                },
                {
                    data: null, 
                    name: 'created_at',
                    render: function(data, type, row) {
                        return getformatteddate(data.created_at);
                    }
                },
                {
                    data: null,
                    name: 'status',
                    render: function(data ,type, row) {
                        var icon = data.status == 1 ? '<i class="fa fa-check fa-lg"></i>' : '<i class="fa fa-close fa-lg"></i>';
                        return '<div style="text-align:center;"><a style="cursor:pointer;" render="{{ $action }}/status/' + data.id + '" onclick="ajaxRequest($(this))">' + icon + '</a></div>';
                    }
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            "order": [
                [3, 'desc'],
            ]
        });
        
    </script>
@endsection

@section('content')

@include('admin.common.bredcrumb')

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        @include('admin.common.message')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="{{ $action }}/add" class="btn btn-box-tool btn-default"><i class="fa fa-plus"></i> Q&rsquo;shish</a>
                </h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped table condensed" id="GridTable">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Sarlavha</th>
                            <th>Galeriya</th>
                            <th>Tuzilgan vaqti</th>
                            <th>Vaqti</th>
                            <th>Aktivligi</th>
                            <th style="width:50px;">Q-cha</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
@endsection