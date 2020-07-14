@if(count($gallery) > 0)
	<div class="widget">
		<h3>{{ tar('Oxirgi foto galeriyalar') }}</h3>
		<div class="latest-galleries">
			@foreach($gallery as $galeriya)
				@if(count($galeriya->rasmlar) > 0)
					<div class="gallery-widget">
						<div class="gallery-photo" rel="hover-parent">
							<a href="#" class="slide-left icon-text">&#59229;</a>
							<a href="#" class="slide-right icon-text">&#59230;</a>
							<ul>
								@foreach($galeriya->rasmlar as $rasm)
									<li>
										<a href="/galeriya/{{ $galeriya->id }}" class="hover-effect">
											<img src="/{{ $rasm->foto }}" alt="{{ $rasm->title }}" />
										</a>
									</li>
								@endforeach
							</ul>
						</div>
						<div class="gallery-content">
							<h4>{{ $galeriya->title }}</h4>
							<span class="meta">
								<span class="right">&#10064; {{ $galeriya->info }} &nbsp;<span class='icon-text'>&#128340; </span>{{ date("d.m.Y", strtotime($galeriya->date)) }}</span>
								<a href="/galeriya/{{ $galeriya->id }}" class="more">{{ tar('Hammasini ko&rsquo;rish') }} <span class="icon-text">&#59230;</span></a>
							</span>
						</div>
					</div>
				@endif
			@endforeach									
		</div>
	</div>
@endif