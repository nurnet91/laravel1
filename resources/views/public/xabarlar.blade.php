@extends('public.layout.two')

@section('content')
	<div class="single-block">
		<div class="content-block main left">									
			<div class="block">
				<div class="block-title">
					<a href="/ruknlar/{{ $report->rukn_id }}" class="right">{{ $report->rukn->title }}</a> <span class="right icon-text">&nbsp; &#59230; &nbsp;</span> <a href="/" class="right">{{ tar('Bosh sahifa') }}</a>
					<h2>{{ $report->title }}</h2>
				</div>
				<div class="block-content">											
					<div class="shortcode-content">												
						<h2 id="image-caption">{!! htmlspecialchars_decode($report->text_sh) !!}</h2>
						@if(!empty($report->foto))
							<div class="wp-caption">
								<img class="{{ $report->title }}" alt="" src="/{{ $report->foto }}" />
							</div>
						@endif
						{!! htmlspecialchars_decode($report->text) !!}	
					</div>
					<br>
					<div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
					<br>
					<br>
					<h2 class="list-title">{{ tar('O&rsquo;xshash maqolalar') }}</h2>
					@if(count($dopolnitelno) > 0)
						@foreach($dopolnitelno as $dops)
							<div class="article-big dotted-style">
								<div class="article-photo">
									<a href="/xabarlar/{{ $dops->id }}" class="hover-effect delegate"><span class="cover" style="font-size:23.333333333333332px;"><i></i><img src="@if(!empty($dops->foto)) /{{ $dops->foto }} @else {{ $no_foto }} @endif" alt="{{ $dops->title }}"></span></a>
								</div>
								<div class="article-content">
									<h2>{{ $dops->title }}</h2>
									<span class="meta">
										<span class="icon-text">&#128340;{{ date('H:i, d.m.Y', strtotime($dops->created_at)) }}</span>
						                <span class="icon-text">&#10004;{{ $dops->readed }}</span>
									</span>
									{!! htmlspecialchars_decode($dops->text_sh) !!}
									<a class="meta more" href="/xabarlar/{{ $dops->id }}">{{ tar('Batafsil') }}<span class="icon-text">&#59230;</span></a>
								</div>
							</div>
						@endforeach
						<a href="/ruknlar/{{ $report->rukn->id }}" class="more">{{ tar('Hammasino ko&rsquo;rish') }}</a>
						<br>
						<hr>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	<script type="text/javascript">(function() {
	  	if (window.pluso)if (typeof window.pluso.start == "function") return;
	  		if (window.ifpluso==undefined) { window.ifpluso = 1;
			    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
			    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
			    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
			    var h=d[g]('body')[0];
			    h.appendChild(s);
	  		}
		})();
  	</script>
@endsection