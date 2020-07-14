@if(count($rightrukns) > 0)
	@foreach($rightrukns as $ruk)
		@if(!empty($ruk->report))
			<div class="widget">
				<h3>{{ $ruk->title }}</h3>
				<div class="widget-articles">
					<h4><a href="/xabarlar/{{ $ruk->report->id}}">{{ $ruk->report->title }}</a></h4>
					<span class="text4">
						{!! htmlspecialchars_decode($ruk->report->text_sh) !!}
					</span>
					<br>
					<span class="meta">
						<a href="/ruknlar/{{ $ruk->id }}" class="icon-text more">{{ tar('Hammasini ko&rsquo;rish') }} &#59230;</a>
					</span>
				</div>
			</div>
		@endif
	@endforeach
@endif