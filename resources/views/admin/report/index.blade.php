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
                    name: 'text_sh',
                    render: function(data, type, row) {
                        return htmlspecialchars_decode(data.text_sh);
                    }
                },
                {data: 'category', name: 'category'},
                {data: 'rukn', name: 'rukn'},
                {data: 'number', name: 'number'},
                {data: 'readed', name: 'readed'},
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
                        return getStatusLink(data.status, data.id, '{{ $action }}');
                    }
                },
                {
                    data: null,
                    name: 'muhim',
                    render: function(data ,type, row) {
                        return getStatus(data.muhim);
                    }
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            "order": [
                [7, 'desc'],
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
                            <th>Qisqacha tekst</th>
                            <th>Kategoriya</th>
                            <th>Rukn</th>
                            <th>Son</th>
                            <th>O&rsquo;qilgan</th>
                            <th>Vaqti</th>
                            <th>Aktivligi</th>
                            <th>Muhimligi</th>
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