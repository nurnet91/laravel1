@if(count($reports) > 0)
  @foreach($reports as $cnt => $report)
    @if(count($report->report) > 0)
      <div class="block rang-{{ $cnt }}">
        <div class="block-title">
          <a href="/ruknlar/{{ $report->id }}" class="right">{{ tar('Hammasi') }}</a>
          <h2>{{ $report->title }}</h2>
        </div>
        <div class="block-content">
          @foreach($report->report as $key => $item)
            @if($key == 0)
              <div class="wide-article">
                <div class="article-photo">
                  <a href="/xabarlar/{{ $item->id }}"><img src="@if(!empty($item->foto)) /{{ $item->foto }} @else {{ $no_foto }} @endif" alt="{{ $item->title }}" /></a>
                </div>
                <div class="article-content">
                  <h2>
                    <a href="/xabarlar/{{ $item->id }}">{{ $item->title }}</a>
                  </h2>
                  <span class="text2">{!! htmlspecialchars_decode($item->text_sh) !!}</span>
                  <span class="meta">
                    <span class="icon-text">&#128340;</span>{{ date("H:i, d.m.Y", strtotime($item->created_at)) }}
                  </span>
                </div>
              </div>
              <ul class="paragraph-row article-block">
            @else
              <li class="column4 item-{{ $key }}">
                
                
                <div class="article-photo">
                  <a href="/xabarlar/{{ $item->id }}"><img src="@if(!empty($item->foto)) /{{ $item->foto }} @else {{ $no_foto }} @endif" alt="{{ $item->title }}" /></a>
                </div>
                <div class="article-content">
                  <h2>
                    <a href="/xabarlar/{{ $item->id }}">{{ $item->title }}</a>
                  </h2>
                  <span class="text3">{!! htmlspecialchars_decode($item->text_sh) !!}</span>
                  <span class="meta">
                    <span class="icon-text">&#128340;</span>{{ date("H:i, d.m.Y", strtotime($item->created_at)) }}
                  </span>
                </div>
              </li>
            @endif
          @endforeach
          </ul>
        </div>
      </div>
    @endif
  @endforeach
@endif