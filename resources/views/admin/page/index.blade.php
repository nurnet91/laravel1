@extends('admin.layout.app')

@section('script')
  <script src="{{ URL::asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script src="{{ URL::asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
  <script>
    $('textarea.editor1').ckeditor({toolbar:'Basic',height:100});
    $('textarea.editor2').ckeditor({height:500});
    
  </script>
@endsection

@section('content')

@include('admin.common.bredcrumb')

<section class="content">
	
	<div class="row" style="padding-top:20px;">
		<div class="col-sm-12 inputgroup-has-padding">
			@include('admin.common.message')
        {{ Form::model($model, ['url' => $action, 'class' => 'form-horizontal']) }}

            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Sarlavha</label>
              <div class="col-sm-10">
                {{ Form::text('title', $model->title, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'Sarlavha']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                {{ Form::text('email', $model->email, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="adres" class="col-sm-2 control-label">Adres</label>
              <div class="col-sm-10">
                 {{ Form::text('adres', $model->adres, ['id' => 'adres', 'class' => 'form-control', 'placeholder' => 'Adres']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="text_sh" class="col-sm-2 control-label">Qisqacha matn</label>
              <div class="col-sm-10">
                {{ Form::textarea('text_sh', $model->text_sh, ['id' => 'text_sh', 'class' => 'form-control editor1', 'placeholder' => 'Qisqacha matn']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Sahifa matni</label>
              <div class="col-sm-10">
                {{ Form::textarea('text', $model->text, ['id' => 'text', 'class' => 'form-control editor2', 'placeholder' => 'Biz haqimizda']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="tel" class="col-sm-2 control-label">Tel nomer</label>
              <div class="col-sm-10">
                 {{ Form::text('tel', $model->tel, ['id' => 'tel', 'class' => 'form-control', 'placeholder' => 'Tel nomer']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="tel2" class="col-sm-2 control-label">Tel nomer 2</label>
              <div class="col-sm-10">
                 {{ Form::text('tel2', $model->tel2, ['id' => 'tel2', 'class' => 'form-control', 'placeholder' => 'Tel nomer 2']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="fb" class="col-sm-2 control-label">Facebook havolasi</label>
              <div class="col-sm-10">
                 {{ Form::text('fb', $model->fb, ['id' => 'fb', 'class' => 'form-control', 'placeholder' => 'Facebook havolasi']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="vk" class="col-sm-2 control-label">Vkontakte havolasi</label>
              <div class="col-sm-10">
                 {{ Form::text('vk', $model->vk, ['id' => 'vk', 'class' => 'form-control', 'placeholder' => 'Vkontakte havolasi']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="gp" class="col-sm-2 control-label">Google+ havolasi</label>
              <div class="col-sm-10">
                 {{ Form::text('gp', $model->gp, ['id' => 'gp', 'class' => 'form-control', 'placeholder' => 'Google+ havolasi']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="tv" class="col-sm-2 control-label">Tvitter havolasi</label>
              <div class="col-sm-10">
                 {{ Form::text('tv', $model->tv, ['id' => 'tv', 'class' => 'form-control', 'placeholder' => 'Tvitter havolasi']) }}
              </div>
            </div>

            <div class="form-group">
              <label for="google_karta" class="col-sm-2 control-label">Google Maps dan manzilingiz iframini kopiya qilib olib shu yerga qo&rsquo;ying</label>
              <div class="col-sm-10">
                {{ Form::textarea('google_karta', $model->google_karta, ['id' => 'google_karta', 'class' => 'form-control', 'placeholder' => 'Google Maps dan manzilingiz iframini kopiya qilib olib shu yerga qo&rsquo;ying']) }}
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