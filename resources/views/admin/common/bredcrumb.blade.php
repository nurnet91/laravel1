<section class="content-header">
  @if(isset($title))
    <h1>{{ $title }} <!-- <small>все</small> --> </h1>
  @endif
  <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Главная </a></li>
      @if(isset($bredcrumb))
        @foreach($bredcrumb as $brend)
          @if(isset($brend['link']))
            <li><a href="{{ $brend['link'] }}"> {{ $brend['title'] }} </a></li>
          @else
            <li class="active"> {{ $brend['title'] }} </li>
          @endif
        @endforeach
      @else
        <li>EMPTY</li>
      @endif
  </ol>
</section>