@extends('admin.layout.app')

@include('admin.common.datetimepicker')

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
    $('textarea.editor1').ckeditor({toolbar:'Basic',height:100});
    $('textarea.editor2').ckeditor({height:500});

    $('.timestamp').datetimepicker({
        format: 'yyyy-mm-dd hh:ii'
    });
    
  </script>
@endsection

@section('content')

@include('admin.common.bredcrumb')

<section class="content">
	
	<div class="row" style="padding-top:20px;">
		<div class="col-sm-12 inputgroup-has-padding">
			@include('admin.common.message')
        {{ Form::model($model, ['url' => $action_link, 'class' => 'form-horizontal', 'files' => true]) }}
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
              <label for="yil" class="col-sm-2 control-label">Yil</label>
              <div class="col-sm-10">
                 {{ Form::text('yil', $model->yil, ['id' => 'yil', 'class' => 'form-control', 'placeholder' => 'Yil']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="son" class="col-sm-2 control-label">Son</label>
              <div class="col-sm-10">
                 {{ Form::text('son', $model->son, ['id' => 'son', 'class' => 'form-control', 'placeholder' => 'Son']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="word" class="col-sm-2 control-label">Son s&rsquo;z bilan</label>
              <div class="col-sm-10">
                 {{ Form::text('word', $model->word, ['id' => 'word', 'class' => 'form-control', 'placeholder' => 'Son s&rsquo;z bilan']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="date" class="col-sm-2 control-label">Chiqarilgan vaqt</label>
              <div class="col-sm-10 input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                {{ Form::text('date', $model->date, ['id' => 'date', 'class' => 'form-control timestamp', 'placeholder' => 'Chiqarilgan vaqt']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Sarlavha</label>
              <div class="col-sm-10">
                 {{ Form::text('title', $model->title, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'Sarlavha']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="text_sh" class="col-sm-2 control-label">Qisqacha matn</label>
              <div class="col-sm-10">
                {{ Form::textarea('text_sh', $model->text_sh, ['id' => 'text_sh', 'class' => 'form-control editor1', 'placeholder' => 'Qisqacha matn']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Barcha matnlar</label>
              <div class="col-sm-10">
                {{ Form::textarea('text', $model->text, ['id' => 'text', 'class' => 'form-control editor2', 'placeholder' => 'Barcha matnlar']) }}
              </div>
            </div>


			      <div class="form-group">
              <label for="status" class="col-sm-2 control-label">Aktivligi</label>
              <div class="col-sm-10" style="padding-top: 7px;">
                {{ Form::checkbox('status', null, true, ['class' => 'flat-red', 'id' => 'status']) }}
              </div>
            </div>

    			  <div class="form-group">
      			  <div class="col-sm-offset-2 col-sm-10">
            		<button type="submit" class="btn btn-success">@if($type == 1) Saqlash @else Qo&rsquo;shish @endif</button>
            	</div>
            </div>
        {{ Form::close() }}
		</div>
	</div>

</section>

@endsection