<div id="messageContent">
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul style="float: left;">
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	        <a class="close" style="text-decoration: none;" data-dismiss="alert">×</a>
	        <div class="clearfix"></div>
	    </div>
	@endif
	@if (Session::has('message1'))
	   <div class="alert alert-success">{{ Session::get('message1') }} <a class="close" style="text-decoration: none;" data-dismiss="alert">×</a></div>
	@endif
	@if (Session::has('message2'))
	   <div class="alert alert-danger">{{ Session::get('message2') }} <a class="close" style="text-decoration: none;" data-dismiss="alert">×</a></div>
	@endif	
</div>