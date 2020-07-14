<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Lockscreen</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/ie/html5shiv.min.js') }}"></script>
    <script src="{{ URL::asset('js/ie/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body class="hold-transition lockscreen">
  <!-- Automatic element centering -->
    <div class="lockscreen-over">
        <img src="{{ URL::asset('img/1.jpg') }}" alt="">
    </div>
    <div class="lockscreen-wrapper">

      @yield('content')
      
    </div>
    <!-- /.center -->

    <!-- jQuery 2.2.0 -->
    <script src="{{ URL::asset('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ URL::asset('bootstrap/bootstrap.min.js') }}"></script>
  </body>
</html>
