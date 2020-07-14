<div class="block">
  	<h2 class="list-title" style="color: #c42b20; border-bottom: 2px solid #c42b20;">{{ $xorij->title}}</h2>
    @if(count($xorij->report) > 0)
    	<ul class="article-block">
      	@foreach($xorij->report as $xabar)
      		<li>            
      			<div class="article-photo">
        			<a href="/xabarlar/{{ $xabar->id }}"><img src="@if(!empty($xabar->foto)) /{{ $xabar->foto }} @else {{ $no_foto }} @endif" alt="{{ $xabar->title }}" /></a>
      			</div>
        		<div class="article-content" style="">
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
      	<a href="/kategoriyalar/{{ $xorij->id }}" class="more"> {{ tar('Hammasini ko&rsquo;rish') }} <span class="icon-text">&#59230;</span></a>
    	</span>
    @else
      <ul class="article-block">{{ tar('Ma&rsquo;lumot yo&rsquo;q') }}</ul>
    @endif
</div>