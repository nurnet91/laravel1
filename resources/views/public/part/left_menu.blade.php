<div class="block">
	<div class="secondary-menu">
		<h2 class="list-title">{{ tar('Asosiy ruknlar') }}</h2>
		<ul>
			@foreach($rukns as $rukn)
				<li class="@if(isset($rukn_id) AND $rukn_id == $rukn->id) active @endif"><a href="/ruknlar/{{ $rukn->id }}">{{ $rukn->title }}</a></li>
			@endforeach
		</ul>
	</div>
</div>