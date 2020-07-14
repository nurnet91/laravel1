@if(isset($banner2))
	<div class="widget">
		<a href="{{ $banner2->link }}" target="_blank"><img src="/{{ $banner2->foto }}" alt="{{ $banner2->title }}" /></a>
		<a href="/aloqa" class="ad-link">
			<span class="icon-text">&#9652;</span>
			{{ tar('Reklama qo&rsquo;yish') }}
			<span class="icon-text">&#9652;</span>
		</a>
	</div>
@endif