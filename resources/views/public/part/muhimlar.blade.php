@if(count($muhimlar) > 0)
  <div class="block">          
    <div class="featured-block gallery-widget">
      <div class="article-photo gallery-photo" rel="hover-parent">
        <a href="#" class="slide-left icon-text">&#59229;</a>
        <a href="#" class="slide-right icon-text">&#59230;</a>
        <ul>
          @foreach($muhimlar as $muhim)
            <li>
              <img src="@if(!empty($muhim->foto)) /{{ $muhim->foto }} @else {{ $no_foto }} @endif" alt="{{ $muhim->title }}" />
              <div class="article-content">
                <h2>
                  <a href="/xabarlar/{{ $muhim->id }}">{{ $muhim->title }}</a>
                </h2>
                <span class="meta">
                  <span class="icon-text">&#128340; </span>{{ date("H:i, d.m.Y", strtotime($muhim->created_at)) }}
                </span>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endif