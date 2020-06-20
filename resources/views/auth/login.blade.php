<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="icon" type="image/png" href="/images/icon.ico" />

    <!-- CSS -->
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('Dashboard/css/all.css') }}">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="{{ asset('Dashboard/css/bootstrap.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('Dashboard/css/login.css') }}">
</head>

<body class="body-container">

<div class="container-wrapper">
    <form action="" method="POST" class="form-signin">
        @csrf
        <h2 class="form-signin-heading text-center">Đăng nhập</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="email" id='email' placeholder="Nhập email">
            @if($errors->has('email'))
                {{$errors->first('email')}}
            @endif
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">
            @if($errors->has('password'))
                {{$errors->first('password')}}
            @endif
        </div>

        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">
            Ghi nhớ đăng nhập
        </label>

        <div class="form-group">
            <label for="">
                <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block">
            Đăng nhập
        </button>
    </form>
</div>


<!-- SCRIPT -->
<!-- Jquery JS -->
<script src="{{ URL::asset('Admins/script/jquery-3.4.1.js') }}"></script>
<!-- Font Awesome JS -->
<script src="{{ URL::asset('Admins/script/all.js') }}"></script>
<!-- Boostrap JS -->
<script src="{{ URL::asset('Admins/script/bootstrap.js') }}"></script>
<!-- Popper JS -->
<script src="{{ URL::asset('Admins/script/popper.min.js') }}"></script>
<!-- Validate From JS -->
<script src="{{ URL::asset('Admins/script/validate.js') }}"></script>
<!-- Custom JS -->
<script src="{{ URL::asset('Admins/script/scr-db.js') }}"></script>

</body>

</html>
