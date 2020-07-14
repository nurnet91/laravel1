<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="csrf_token" content="{{ csrf_token() }}">
	  <title>AdminLTE 2 | Dashboard</title>
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <link rel="stylesheet" href="{{ URL::asset('bootstrap/bootstrap.min.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('css/_all-skins.min.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('plugins/iCheck/flat/blue.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('plugins/morris/morris.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
	  <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
	  <!--[if lt IE 9]>
		  <script src="{{ URL::asset('js/ie/html5shiv.min.js') }}"></script>
		  <script src="{{ URL::asset('js/ie/respond.min.js') }}"></script>
	  <![endif]-->
	  <link rel="stylesheet" href="{{ URL::asset('css/styleadmin.css') }}">
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	  <header class="main-header">
	    <a href="index2.html" class="logo">
	      <span class="logo-mini"><b>A</b>LT</span>
	      <span class="logo-lg"><b>Admin</b>LTE</span>
	    </a>
	    <nav class="navbar navbar-static-top">
	      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	        <span class="sr-only">Toggle navigation</span>
	      </a>

	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
	          <li>
	          	<a href="/" target="_blank">Saytni ko&rsquo;rish</a>
	          </li>
	          <li class="dropdown user user-menu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <img src="{{ URL::asset(auth()->user()->image) }}" class="user-image" alt="User Image">
	              <span class="hidden-xs">{{auth()->user()->fio}}</span>
	            </a>
	            <ul class="dropdown-menu">
	              <li class="user-header">
	                <img src="{{ URL::asset(auth()->user()->image) }}" class="img-circle" alt="User Image">
	                <p>
	                  {{auth()->user()->fio}} - {{auth()->user()->dolz}}
	                  <small>Вы активны с {{ date("d.m.Y", strtotime(auth()->user()->created_at)) }}</small>
	                </p>
	              </li>
	              <li class="user-footer">
	                <div class="pull-left">
	                  <a href="/profile" class="btn btn-default btn-flat">Профиль</a>
	                </div>
	                <div class="pull-right">
	                  <a href="/logout" class="btn btn-default btn-flat">Выход</a>
	                </div>
	              </li>
	            </ul>
	          </li>
	        </ul>
	      </div>
	    </nav>
	  </header>
	  @include('admin.common.left')
	  <div class="content-wrapper">
		@yield('styleauto')
		@yield('style')
	  	@yield('content')	    
	  </div>
	  <footer class="main-footer">
	    <div class="pull-right hidden-xs">
	      <b>Version</b> 1.1.1
	    </div>
	    <strong>Copyright &copy; 2016 <a href="http://asar.uz" target="_blank">Asar technology</a>.</strong> All rights
	    reserved.
	  </footer>
	</div>
	<script src="{{ URL::asset('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/jQueryUI/jquery-ui.min.js') }}"></script>
	<script>
	  	$.widget.bridge('uibutton', $.ui.button);
	  	$.ajaxSetup({
        	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        	}
		});
	</script>
	<script src="{{ URL::asset('bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/raphael-min.js') }}"></script>
	<script src="{{ URL::asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ URL::asset('plugins/knob/jquery.knob.js') }}"></script>
	<script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/fastclick/fastclick.js') }}"></script>
	<script src="{{ URL::asset('js/app.min.js') }}"></script>
  	@yield('scriptauto')
  	@yield('script')
	<script src="{{ URL::asset('js/script.js') }}"></script>
	</body>
</html>

