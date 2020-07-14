<div class="overflow-fix">
  <div class="photo-gallery-grid">
    @if(count($gallery) > 0)
      @foreach($gallery as $galeriya)
        @if(count($galeriya->rasmlar) > 0)
          <div class="photo-gallery-block">
            <div class="gallery-photo">
              <a href="/galeriya/{{ $galeriya->id }}" class="hover-effect"><img src="/{{ $galeriya->foto }}" alt="{{ $galeriya->title }}" /></a>
            </div>
            <div class="gallery-content">
              <h3>{{ $galeriya->title }}</h3>
              {!! htmlspecialchars_decode($galeriya->text) !!}
              <span class="meta">
                <span class="right">&#10064; {{ $galeriya->info }} &nbsp;<span class='icon-text'>&#128340; </span>{{ date("d.m.Y", strtotime($galeriya->date)) }}</span>
                <div class="clear-float"></div>
                <a href="/galeriya/{{ $galeriya->id }}" class="more right">{{ tar('Hammasini ko&rsquo;rish') }} <span class="icon-text">&#59230;</span></a>
                <div class="clear-float"></div>
              </span>
            </div>
          </div>
        @endif
      @endforeach
    @else
      <h2>{{ tar('Galeriyada rasmlar yo&rsquo;q') }}</h2>
    @endif
  </div>
</div>