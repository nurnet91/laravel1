@extends('public.layout.full')

@section('content')
	<div class="block">
		@if(!empty($model))
		<div class="block-title">
			<a href="/" class="right">{{ tar('Bosh sahifa') }}</a>
			<h2>{{ $model->title }}</h2>
		</div>
		<div class="block-content c-content">
				@if(!empty($model->text_sh))
					{!! htmlspecialchars_decode($model->text_sh) !!}
					<hr>
				@endif

				@if(isset($contact))
					<div class="paragraph-row">
						<div class="column6">
							{!! htmlspecialchars_decode($model->text) !!}
						</div>
						<div class="column6">
							@include('public.common.message')
							<div id="writecomment">
								{{ Form::model($contact, ['url' => '/contact/send', 'class' => 'form-horizontal']) }}

									<p class="contact-form-user">
										<label for="fio">FISH<span class="required">*</span></label>
										{{ Form::text('fio', $contact->fio, ['id' => 'fio', 'class' => 'form-control', 'placeholder' => 'FISH']) }}
									</p>
									<p class="contact-form-user">
										<label for="phone">Telefon nomer<span class="required">*</span></label>
										{{ Form::text('phone', $contact->phone, ['id' => 'phone', 'class' => 'form-control', 'placeholder' => '998YYXXXXXXX']) }}
									</p>
									<p class="contact-form-email">
										<label for="email">E-mail<span class="required">*</span></label>
										{{ Form::text('email', $contact->email, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'E-mail']) }}
									</p>
									<p class="contact-form-message">
										<label for="message">Xat<span class="required">*</span></label>
										{{ Form::textarea('message', $contact->message, ['id' => 'message', 'class' => 'form-control', 'placeholder' => 'Xat']) }}
									</p>
									<p><input type="submit" class="styled-button" value="Jo&rsquo;natish" /></p>
								
								{{ Form::close() }}
							</div>							
						</div>
					</div>
					<hr>						
				@else
					{!! htmlspecialchars_decode($model->text) !!}
					<hr>		
				@endif
				@if(!empty($model->email))
					<h4>Email: <i>{{ $model->email }}</i></h4>
					<hr>
				@endif
				@if(!empty($model->tel))
					<h4>Telefon: <i>{{ $model->tel }}</i></h4>
					<hr>
				@endif
				@if(!empty($model->tel2))
					<h4>Faks: <i>{{ $model->tel2 }}</i></h4>
					<hr>
				@endif
				@if(!empty($model->adres))
					<h4>Adres: <i>{{ $model->adres }}</i></h4>
					<hr>
				@endif
				@if(!empty($model->google_karta))
					<div class="map-border">
						{!! htmlspecialchars_decode($model->google_karta) !!}
					</div>
				@endif
				@if(!empty($model->fb) OR !empty($model->vk) OR !empty($model->gp) OR !empty($model->tv))
					<div>
						<div class="share-article left">
							<span>{{ tar('Sotsial sahifalarda') }}</span>
							<strong>{{ tar('bizni qo&rsquo;llab quvvatlang') }}</strong>
						</div>
						<div class="left">
							@if(!empty($model->fb))
								<a href="{{$model->fb}}" class="custom-soc icon-text" title="FaceBook">&#62220;</a>
							@endif
							@if(!empty($model->tv))
								<a href="{{$model->tv}}" class="custom-soc icon-text" title="Tvitter">&#62217;</a>
							@endif
							@if(!empty($model->gp))
								<a href="{{$model->gp}}" class="custom-soc icon-text" title="Google+">&#62223;</a>
							@endif
							@if(!empty($model->vk))
								<a href="{{$model->vk}}" class="custom-soc icon-text" title="Vkontakte">&#62214;</a>
							@endif
						</div>
						<div class="clear-float"></div>
					</div>
					<hr>
				@endif
		</div>
		@else
			<h2>{{ tar('Hali ma&rsquo;lumotlar kiritilmagan') }}</h2>
		@endif
	</div>
@endsection