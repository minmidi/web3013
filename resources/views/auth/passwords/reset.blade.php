<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đổi mật khẩu</title>
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
				<div class="login100-form-title" style="background-image: url('../../../Dashboard/images/bg-01.jpg');">
					<span class="login100-form-title-1">
                        ĐỔI MẬT KHẨU
					</span>
				</div>

				<form action="{{route('password.update')}}" class="login100-form validate-form" method="POST">
					@csrf
					<div class="wrap-input100 validate-input m-b-26">
                    <input type="hidden" name="token" value="{{ $token }}">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" id="email" placeholder="Nhập email" @error('email') is-invalid @enderror value="{{ old('email',$email) }}">
						<span class="focus-input100"></span>
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="password" id="password" @error('password') is-invalid @enderror
							placeholder="Nhập mật khẩu">
						<span class="focus-input100"></span>
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Xác nhận mật khẩu</span>
						<input class="input100" type="password" name="password_confirmation" id="password_confirmation"
							placeholder="Xác nhận mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Tiếp tục
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
