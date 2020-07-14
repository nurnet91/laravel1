<div class="wrapper">
	<div class="header-logo">
		<h1><a href="/">{{ tar('Oila davrasida') }}</a></h1>
		<!-- <a href="index.html"><img src="images/logo-header.png" alt="" /></a> -->
	</div>
	
	@can('admin')
		<div class="header-menu admin-panel">
			<ul>
				<li><a href="/numbers">{{ tar('Gazita sonlari') }}</a></li>
				<li><a href="/categories">{{ tar('Kategoriyalar') }}</a></li>
				<li><a href="/rukns">{{ tar('Ruknlar') }}</a></li>
				<li><a href="/reports">{{ tar('Barcha mavzular') }}</a></li>
			</ul>
		</div>					
	@endif
	<div class="header-addons">
		<div class="header-weather">
			<a href="http://www.meteo.uz/rus/forecast/" target=_blank>
				<img src="http://meteo.uz/informer/informer.php" border="0">
			</a>
			<span class="city">
				<strong>{{ tar($hafta) }}</strong>
				<small>{{ date("d") }}-{{ tar($oy) }} {{ date("Y") }}</small>
			</span>
		</div>
	</div>
	<div class="header-addons">
		<div class="header-search">
			<form action="/search" method="get">
				<input type="text" placeholder="{{ tar('Qidirish') }}" name="q" value="@if(isset($search_query)) {{ $search_query}} @endif" class="search-input" />
				<input type="submit" value="Search" class="search-button" />
			</form>
		</div>
	</div>
	<!-- <div class="header-menu nijnee">
		<ul>
			<li><a href="/">Uz</a></li>
			<li><a href="/">Ўз</a></li>
		</ul>
	</div> -->
</div>
					