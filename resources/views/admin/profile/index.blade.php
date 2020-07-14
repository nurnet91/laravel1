@extends('admin.layout.app')

@section('content')

@include('admin.common.bredcrumb')
<section class="content">
	@include('admin.common.message')
    <div class="row">
        <div class="col-md-3">
          	<div class="box box-primary">
            	<div class="box-body box-profile">
              		<img class="profile-user-img img-responsive img-circle" src="{{auth()->user()->image}}" alt="User profile picture">
              		<h3 class="profile-username text-center">{{auth()->user()->fio}}</h3>
              		<p class="text-muted text-center">{{auth()->user()->dolz}}</p>
	              	<!-- <ul class="list-group list-group-unbordered">
	                	<li class="list-group-item">
	                  		<b>Followers</b> <a class="pull-right">1,322</a>
	                	</li>
	                	<li class="list-group-item">
	                  		<b>Following</b> <a class="pull-right">543</a>
	                	</li>
	                	<li class="list-group-item">
	                  		<b>Friends</b> <a class="pull-right">13,287</a>
	                	</li>
	              	</ul> -->

              		<!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            	</div>
          	</div>
          	<div class="box box-primary">
	            <div class="box-header with-border">
	              	<h3 class="box-title">Men haqimda</h3>
	            </div>
	            <div class="box-body">
	              	<strong><i class="fa fa-book margin-r-5"></i> O&rsquo;qish joyi</strong>
	              	<p class="text-muted">@if(!empty(auth()->user()->education)) {{auth()->user()->education}} @else Ma&rsquo;lumot yo&rsquo;q @endif</p>
	              	<hr>
	              	<strong><i class="fa fa-map-marker margin-r-5"></i> Adres</strong>
	              	<p class="text-muted">@if(!empty(auth()->user()->adres)) {{auth()->user()->adres}} @else Ma&rsquo;lumot yo&rsquo;q @endif</p>
	              	<!-- <hr> -->
	              	<!-- <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
	              	<p>
	                	<span class="label label-danger">UI Design</span>
	                	<span class="label label-success">Coding</span>
	                	<span class="label label-info">Javascript</span>
	                	<span class="label label-warning">PHP</span>
	                	<span class="label label-primary">Node.js</span>
	              	</p> -->
	              	<hr>
	              	<strong><i class="fa fa-file-text-o margin-r-5"></i> Status</strong>
	              	<p class="text-muted">@if(!empty(auth()->user()->note)) {{auth()->user()->note}} @else Ma&rsquo;lumot yo&rsquo;q @endif</p>
	            </div>
        	</div>
        </div>
        <div class="col-md-9">
          	<div class="nav-tabs-custom">
            	<ul class="nav nav-tabs">
              		<li class="@if($type == 'settings') active @endif"><a href="#settings" data-toggle="tab">Sozlash</a></li>
              		<li class="@if($type == 'login') active @endif"><a href="#login" data-toggle="tab">Login parol</a></li>
           		</ul>
            	<div class="tab-content">
              		<div class="@if($type == 'settings') active @endif tab-pane" id="settings">
                		<form class="form-horizontal" method="POST" action="/editProfile">
                  			{{ csrf_field() }}
                  			<div class="form-group">
		                    	<label for="fio" class="col-sm-2 control-label">FISh</label>
		                    	<div class="col-sm-10">
		                      		<input type="text" class="form-control" id="fio" name="fio" placeholder="FISh" value="{{auth()->user()->fio}}">
		                    	</div>
		                  	</div>

			                <div class="form-group">
			                    <label for="dolz" class="col-sm-2 control-label">Mansabi</label>
			                    <div class="col-sm-10">
			                      	<input type="text" class="form-control" id="dolz" name="dolz" placeholder="Mansabi" value="{{auth()->user()->dolz}}">
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="education" class="col-sm-2 control-label">O&rsquo;qish joyi</label>
			                    <div class="col-sm-10">
			                      	<input type="text" class="form-control" id="education" name="education" placeholder="O&rsquo;qish joyi" value="{{auth()->user()->education}}">
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="adres" class="col-sm-2 control-label">Adres</label>
			                    <div class="col-sm-10">
			                      	<input type="text" class="form-control" id="adres" name="adres" placeholder="Adres" value="{{auth()->user()->adres}}">
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="email" class="col-sm-2 control-label">Email</label>
			                    <div class="col-sm-10">
			                      	<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{auth()->user()->email}}">
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="note" class="col-sm-2 control-label">Status</label>
			                    <div class="col-sm-10">
			                    	<textarea name="note" id="note" class="form-control" placeholder="Status">{{auth()->user()->note}}</textarea>
			                    </div>
			                </div>

                  			<div class="form-group">
                    			<div class="col-sm-offset-2 col-sm-10">
		                      		<button type="submit" class="btn btn-success">Сохранить</button>
		                    	</div>
		                  	</div>
		                </form>
		            </div>
		            <!-- 2-tab -->
		            <div class="@if($type == 'login') active @endif tab-pane" id="login">
                		<form class="form-horizontal" method="POST" action="/profile/edit">
                  			{{ csrf_field() }}
                  			<div class="form-group">
		                    	<label for="login" class="col-sm-2 control-label">login</label>
		                    	<div class="col-sm-10">
		                      		<input type="text" class="form-control" id="login" name="login" placeholder="login" value="{{auth()->user()->login}}">
		                    	</div>
		                  	</div>

			                <div class="form-group">
			                    <label for="password" class="col-sm-2 control-label">Yangi parol</label>
			                    <div class="col-sm-10">
			                      	<input type="password" class="form-control" id="password" name="password" placeholder="Yangi parol">
			                    </div>
			                </div>

			                <div class="form-group">
			                    <label for="password_confirmation" class="col-sm-2 control-label">Parolni qaytaring</label>
			                    <div class="col-sm-10">
			                      	<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Parolni qaytaring">
			                    </div>
			                </div>
                  			<div class="form-group">
                    			<div class="col-sm-offset-2 col-sm-10">
		                      		<button type="submit" class="btn btn-success">Сохранить</button>
		                    	</div>
		                  	</div>
		                </form>
		            </div>
	            </div>
          	</div>
        </div>
    </div>
</section>

@endsection