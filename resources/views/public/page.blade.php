@extends('public.layout.app')

@section('content')
  @if(count($reports) > 0)
    <div class="block">
      <div class="block-title">
        @if(isset($bred))
          {!! $bred !!}
        @endif
        <h2>{!! $bred2 !!}</h2>
      </div>
      <div class="block-content">
        
        @if(isset($nomer))
          <div class="shortcode-content">                       
            <h2 id="image-caption">
              {!! htmlspecialchars_decode($nomer['text_sh']) !!}
            </h2>
            <div class="wp-caption">
              <img class="" alt="{{ $nomer['foto'] }}" src="@if(!empty($nomer['foto'])) /{{ $nomer['foto'] }} @else {{ $no_foto }} @endif">
            </div>
            {!! htmlspecialchars_decode($nomer['text']) !!}  
          </div>
          <hr>
        @endif
        @foreach($reports as $rep)
          <div class="article-big">
            <div class="article-photo">
              <a href="/xabarlar/{{ $rep->id }}" class="hover-effect"><img src="@if(!empty($rep->foto)) /{{ $rep->foto }} @else {{ $no_foto }} @endif" alt="{{ $rep->title }}" /></a>
            </div>
            <div class="article-content">
              <h2>{{ $rep->title }}</h2>
              <span class="meta">
                <a href="/ruknlar/{{ $rep->rukn->id }}"><span class="icon-text">&#8801;</span>{{ $rep->rukn->title }}</a>
                @if(!empty($rep->category))
                  <a href="/kategoriyalar/{{ $rep->category->id }}"><span class="icon-text">&#8801;</span>{{ $rep->category->title }}</a>
                @endif
                <span class="icon-text">&#128340;{{ date('H:i, d.m.Y', strtotime($rep->created_at)) }}</span>
                <span class="icon-text">&#10004;{{ $rep->readed }}</span>
              </span>
              {!! htmlspecialchars_decode($rep->text_sh) !!}
              <span class="meta more">
                <a href="/xabarlar/{{ $rep->id }}">{{ tar('To&rsquo;liqroq') }}<span class="icon-text">&#59230;</span></a>
              </span>
            </div>
          </div>
        @endforeach
        
        {!! $reports->render() !!}

      </div>
    </div>
  @else
    <div class="block">
      <div class="block-title">
        <h4>{{ tar('Ma&rsquo;lumot yo&rsquo;q') }}</h4>
      </div>
    </div>
  @endif
@endsection