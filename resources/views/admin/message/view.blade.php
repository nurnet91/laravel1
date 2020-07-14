@extends('admin.layout.app')

@section('content')
@include('admin.common.bredcrumb')
  <div class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">{{ $model->fio }}</h3>
      </div>
      <div class="box-body">
        <strong>Xat</strong>
        <p>{{ $model->message }}</p>
        <hr>

        <strong>Vaqti</strong>
        <p>{{ date('H:i, d.m.Y', strtotime($model->created_at)) }}</p>
        <hr>

        <strong>Telefon</strong>
        <p class="text-muted">{{ $model->phone }}</p>
        <hr>

        <strong>Email</strong>
        <p class="text-muted">{{ $model->email }}</p>
        <hr>

        <strong>Ip</strong>
        <p class="text-muted">{{ $model->ip }}</p>
        <hr>

        <strong>Qabul qilgan pochta</strong>
        <p class="text-muted">{{ $model->send_email }}</p>
        <hr>

      </div>
    </div>    
  </div>
@endsection
