@if(isset($banner3))
	<div class="block">
	  	<div class="banner">
	    	<a href="{{ $banner3->link }}" target="_blank"><img src="/{{ $banner3->foto }}" alt="{{ $banner3->title }}" /></a>
	    	<a href="/aloqa" class="ad-link">
	    		<span class="icon-text">&#9652;</span>
	    		{{ tar('Reklama qo&rsquo;yish') }}
	    		<span class="icon-text">&#9652;</span>
	    	</a>
	  	</div>
	</div>
@endif