@extends('admin.layout.app')

@section('content')
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  	<h1>Search <small>result</small></h1>
	  	<ol class="breadcrumb">
	    	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    	<li class="active">Search</li>
	  	</ol>
	</section>

	<!-- Main content -->
	<section class="content">
	  	<!-- Main row -->
	  	<div class="box">
	  		<div class="box-header with-border">
	          	<h3 class="box-title">Search Results for "{{ Request::input('q') }}"</h3>
	          	<div class="box-tools pull-right">
	            	<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
	              		<i class="fa fa-minus"></i>
	              	</button>
	          	</div>
	        </div>
	        <div class="box-body">
	          	<ul>
	          		@foreach($result as $res)
	          			<li>
	          				<h3>{{ $res->title }}</h3>
	          				<p>{{ $res->text_sh }}</p>
	          			</li>
	          		@endforeach
	          	</ul>
	        </div>
	  	</div>
	  	<!-- /.row (main row) -->

	</section>
	<!-- /.content -->
@endsection