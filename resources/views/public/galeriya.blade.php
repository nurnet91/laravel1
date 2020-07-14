@extends('public.layout.full')

@section('scripts')
  <script>
    $(function(){
      $('.photo-gallery-full .photo-gallery-thumbs .inner-thumb a').click(function(){
        $('.photo-gallery-full .the-image img').attr('src', $(this).find('img').attr('src'));
        $('.photo-gallery-full .photo-gallery-thumbs .inner-thumb a').removeClass('active');
        $(this).addClass('active');
        return false;
      });
    });  
  </script>
@endsection

@section('content')
  <div class="block">
    <div class="block-title">
      <a href="/galeriya" class="right">{{ tar('Galeriya') }}</a> <span class="right icon-text">&nbsp; &#59230; &nbsp;</span> <a href="/" class="right">{{ tar('Bosh sahifa') }}</a>
      <h2>{{ tar('Galeriya') }}</h2>
    </div>
    <div class="block-content">
      <div class="photo-gallery-full">
        <div class="the-image">
          <a href="#" class="photo-controls left icon-text">&#58541;</a>
          <a href="#" class="photo-controls right icon-text">&#58542;</a>
          @if(count($foto) > 0)
            <img src="/{{ $foto[0]->foto }}" alt="{{ $foto[0]->title }}" />
          @endif
        </div>
        <div class="photo-gallery-thumbs" id="makeMeScrollable">
          <div class="inner-thumb">
            @if(count($foto) > 0)
              @foreach($foto as $r => $rasm)
                <a href="#" class="@if($r == 0) active @endif">
                  <img src="/{{ $rasm->foto }}" alt="{{ $rasm->title }}" />
                </a>
              @endforeach
            @endif
          </div>
        </div>
      </div>      
      <div class="shortcode-content">
        @if(count($foto) > 0)
          <h2>{{ $foto[0]->gallery->title }}</h2>
          {!! htmlspecialchars_decode($foto[0]->gallery->text) !!}
        @endif
        <hr />
      </div>
    </div>      
    <div class="block-title">
      <a href="/galeriya" class="right">{{ tar('Barcha galeriyalarni ko&rsquo;rish') }}</a>
      <h2>{{ tar('O&rsquo;xshash galeriyalar') }}</h2>
    </div>
    <div class="block-content">
      @include('public.part.galery_list')
    </div>
  </div>
@endsection
