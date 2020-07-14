@if(count($more) > 0)
	<div class="widget">
		<h3>{{ tar('Ko&rsquo;p o&rsquo;qilganlar') }}</h3>
		<div class="widget-articles">
			<ul>
				@foreach($more as $mor)
					<li>
						<div class="article-photo">
							<a href="post.html" class="hover-effect"><img src="@if(!empty($mor->foto)) /{{ $mor->foto }} @else {{ $no_foto }} @endif" alt="{{ $mor->title }}" /></a>
						</div>
						<div class="article-content">
							<h4>
								<a href="/xabarlar/{{ $mor->id }}">{{ $mor->title }}</a>
							</h4>
							<span class="text1">
								{!! htmlspecialchars_decode($mor->text_sh) !!}
							</span>
							<span class="meta">
								<span class="icon-text">&#10004; {{ $mor->readed }} &nbsp;&nbsp; &#128340; {{ date("H:i, d.m.Y", strtotime($mor->created_at)) }}</span>
							</span>
						</div>
					</li>
				@endforeach
			</ul>
			<span class="meta more">
				<a href="/morereaded" class="icon-text">{{ tar('Hammasini ko&rsquo;rish') }} &#59230;</a>
			</span>
		</div>
	</div>
@endif