@if(isset($banner1))
	<div class="ad-banner">
		<a href="/aloqa" class="ad-link top">
			<span class="icon-text">&#9662;</span>
			{{ tar('Reklama qo&rsquo;yish') }}
			<span class="icon-text">&#9662;</span>
		</a>
		<a href="{{ $banner1->link }}" target="_blank"><img src="/{{ $banner1->foto }}" alt="{{ $banner1->title }}" /></a>
	</div>
@endif