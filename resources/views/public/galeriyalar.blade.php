@extends('public.layout.full')

@section('content')
    <div class="block">
      <div class="block-title">
      	<a href="/" class="right">{{ tar('Bosh sahifa') }}</a>
        <h2>{{ tar('Galeriya') }}</h2>
      </div>
      <div class="block-content">
        @include('public.part.galery_list')
      </div>
    </div>
@endsection
