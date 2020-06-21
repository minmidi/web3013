<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Dashboard/css/bootstrap.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Dashboard/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Dashboard/css/main.css') }}">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('../Dashboard/images/bg-01.jpg');">
					<span class="login100-form-title-1">
						Đăng nhập
					</span>
				</div>

				<form class="login100-form validate-form" method="POST">
					@csrf
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" id="email" placeholder="Nhập email">
						<span class="focus-input100"></span>
						@if($errors->has('email'))
							{{$errors->first('email')}}
						@endif
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="password" id="password"
							placeholder="Nhập mật khẩu">
						<span class="focus-input100"></span>
						@if($errors->has('password'))
							{{$errors->first('password')}}
						@endif
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" type="checkbox" value="remember-me" id="ckb1" name="rememberMe">
							<label class="label-checkbox100" for="ckb1">
								Nhớ đăng nhập
							</label>
						</div>

						<div>
							<a href="{{ route('password.request') }}" class="txt1">
								Quên mật khẩu?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="{{ asset('Dashboard/js/jquery.js') }}"></script>
	<script src="{{ asset('Dashboard/js/bootstrap.js') }}"></script>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="{{ asset('Dashboard/js/main.js') }}"></script>

</body>

</html>

<!-- <link rel="stylesheet" href=""> -->
