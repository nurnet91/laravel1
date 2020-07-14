<div class="widget">
  <div class="featured-block">
    <div class="article-content">
      <h3><a href="/sonlar">{{ $yangi_son['title'] }}</a></h3>
      <span class="text">{!! htmlspecialchars_decode($yangi_son['text_sh']) !!}</span>
      <span class="meta">
        <span class="icon-text">&#128340; </span>{{ date("H:i, d.m.Y", strtotime($yangi_son['created_at'])) }}
      </span>
    </div>
    <div class="article-photo">
      <div class="son_gazet">{{ $yangi_son['son'] }}</div>
      <a href="/sonlar">
        <img src="@if(empty($yangi_son['foto'])) {{ $no_image }} @else /{{ $yangi_son['foto'] }} @endif" alt="{{ $yangi_son['title'] }}" />
      </a>
    </div>
  </div>
</div>

