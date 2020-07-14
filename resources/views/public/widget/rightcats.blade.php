@if(count($rightcats) > 0)
	@foreach($rightcats as $cat)
		@if(!empty($cat->report))
			<div class="widget">
				<h3>{{ $cat->title }}</h3>
				<div class="widget-articles">
					<h4><a href="/xabarlar/{{ $cat->report->id}}">{{ $cat->report->title }}</a></h4>
					<span class="text4">
						{!! htmlspecialchars_decode($cat->report->text_sh) !!}
					</span>
					<br>
					<span class="meta">
						<a href="/kategoriyalar/{{ $cat->id }}" class="icon-text more">{{ tar('Hammasini ko&rsquo;rish') }} &#59230;</a>
					</span>
				</div>
			</div>
		@endif
	@endforeach
@endif