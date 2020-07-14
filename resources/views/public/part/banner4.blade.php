@if(isset($banner4))
	<div class="block">
	    <div class="banner">
	      <a href="{{ $banner4->link }}" target="_blank"><img src="/{{ $banner4->foto }}" alt="{{ $banner4->title }}" /></a>
	      <a href="/aloqa" class="ad-link">
	      	<span class="icon-text">&#9652;</span>
	      	{{ tar('Reklama qo&rsquo;yish') }}
	      	<span class="icon-text">&#9652;</span>
	      </a>
	    </div>
	</div>
@endif