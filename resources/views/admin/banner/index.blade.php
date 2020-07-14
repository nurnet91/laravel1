@extends('admin.layout.app')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('plugins/iCheck/all.css') }}">
@endsection

@section('script')
  <script src="{{ URL::asset('plugins/iCheck/icheck.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script src="{{ URL::asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
  <script>

    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    $('input[name="foto"]').change(function() {
        loadImage(this);
    });
    $('textarea.editor2').ckeditor({height:500});
    
  </script>
@endsection

@section('content')

@include('admin.common.bredcrumb')

<section class="content">
	
	<div class="row" style="padding-top:20px;">
		<div class="col-sm-12 inputgroup-has-padding">
			@include('admin.common.message')
        {{ Form::model($model, ['url' => $action, 'class' => 'form-horizontal', 'files' => true]) }}
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-10">
                <label class="btn btn-default img-label">
                  <input type="file" name="foto">
                  @if(!empty($model->foto))
                    <img id="LoadedImage" src="/{{$model->foto}}" alt="rasm tanlang">
                  @else()
                    <img id="LoadedImage" src="/img/no-image.png" alt="rasm tanlang">
                  @endif()
                </label>
                @if(isset($model->id) AND !empty($model->foto))
                  <a render="{{ $action }}/delimg/{{ $model->id }}" class="del-img" onclick="ajaxRequestWithConfirm($(this), 'Rasmni rostdanam o&rsquo;chirmoqchimisiz?')">Rasmni o&rsquo;chirish</a>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Sarlavha</label>
              <div class="col-sm-10">
                {{ Form::text('title', $model->title, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'Sarlavha']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Matn</label>
              <div class="col-sm-10">
                {{ Form::textarea('text', $model->text, ['id' => 'text', 'class' => 'form-control editor2', 'placeholder' => 'Matn']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="size" class="col-sm-2 control-label">O&rsquo;lchami</label>
              <div class="col-sm-10">
                {{ Form::text('size', $model->size, ['id' => 'size', 'class' => 'form-control', 'placeholder' => 'O&rsquo;lchami', 'disabled' => true]) }}
              </div>
            </div>

            <div class="form-group">
              <label for="link" class="col-sm-2 control-label">Havolasi</label>
              <div class="col-sm-10">
                {{ Form::text('link', $model->link, ['id' => 'link', 'class' => 'form-control disabled', 'placeholder' => 'Havolasi']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="status" class="col-sm-2 control-label">Aktivligi</label>
              <div class="col-sm-10" style="padding-top: 7px;">
                {{ Form::checkbox('status', null, isset($model->status) ? $model->status : true, ['class' => 'flat-red', 'id' => 'status']) }}
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Saqlash</button>
              </div>
            </div>
        {{ Form::close() }}
    </div>
  </div>

</section>

@endsection