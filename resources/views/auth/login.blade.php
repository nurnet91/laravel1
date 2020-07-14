@extends('admin.layout.lock')

@section('content')
    @if ($errors->has('login'))
        <div class="alert alert-danger">
            <strong>{{ $errors->first('login') }}</strong>
        </div>
    @endif
    <div class="lockscreen-logo">
        <a href="/"><strong>Admin</strong> Oila davrasida</a>
    </div>
    <div class="lockscreen-items">
        <div class="lockscreen-image">
            <img src="{{ URL::asset('uploads/users/small/user1.png') }}" alt="User Image">
        </div>
        <div class="lockscreen-item">
            <form class="lockscreen-credentials" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="login" class="form-control input-lg" placeholder="Login" style="border-bottom: 1px solid rgb(144, 181, 146);" value="{{ old('login') }}">
                    <input type="password" name="password" class="form-control input-lg" placeholder="Parol" value="{{ old('password') }}">
                    <!-- <input type="checkbox" name="remember"> Remember Me -->
                    <div class="input-group-btn">
                        <button type="submit" class="btn">
                            <i class="fa fa-arrow-right text-muted"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>        
    </div>
    <div class="help-block text-center">Sistemaga kirish uchun login va parolingizni tering</div>
    <div class="lockscreen-footer text-center">Copyright &copy; 2016 
        <b><a href="http://asar.uz/" class="text-black">Asar Technologies</a></b><br> All rights reserved
    </div>
    <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
@endsection
