<div id="messageContent">
	@if (count($errors) > 0)	    
	    <div class="coloralert" style="background: #a12717;">
            @foreach ($errors->all() as $error)
				<p>{{ tar($error) }}</p>
            @endforeach
			<a href="#close-alert" class="icon-text">&#10006;</a>
		</div>
	@endif
	@if (Session::has('message1'))
		<div class="coloralert" style="background: #68a117;">
			<p>{{ tar(Session::get('message1')) }}</p>
			<a href="#close-alert" class="icon-text">&#10006;</a>
		</div>
	@endif
	@if (Session::has('message2'))
		<div class="coloralert" style="background: #a12717;">
			<p>{{ tar(Session::get('message2')) }}</p>
			<a href="#close-alert" class="icon-text">&#10006;</a>
		</div>
	@endif	
</div>