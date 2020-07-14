<div class="block">
  	<h2 class="list-title" style="color: #5a9e25;border-bottom: 2px solid #5a9e25;">{{ $mahalliy->title}}</h2>
    @if(count($mahalliy->report) > 0)
    	<ul class="article-block">
      	@foreach($mahalliy->report as $xabar)
      		<li>
            <div class="article-photo">
              <a href="/xabarlar/{{ $xabar->id }}"><img src="@if(!empty($xabar->foto)) /{{ $xabar->foto }} @else {{ $no_foto }} @endif" alt="{{ $xabar->title }}" /></a>
            </div>
            <div class="article-content">
          		<h3>
          			<a href="/xabarlar/{{ $xabar->id }}">{{ $xabar->title }}</a>
          		</h3>
          		<span class="text1">{!! htmlspecialchars_decode($xabar->text_sh) !!}</span>
          		<span class="meta">
            		<span class="icon-text">&#128340;</span>{{ date("H:i, d.m.Y", strtotime($xabar->created_at)) }}
          		</span>
          	</div>
        	</li>
      	@endforeach
    	</ul>
  		<span class="meta">
        <a href="/kategoriyalar/{{ $mahalliy->id }}" class="more">{{ tar('Hammasini ko&rsquo;rish') }} <span class="icon-text">&#59230;</span></a>
      </span>
    @else
      <ul class="article-block">{{ tar('Ma&rsquo;lumot yo&rsquo;q') }}</ul>
    @endif
</div>