<!DOCTYPE html>
<html lang="en">

<head>
	<title>Quên mật khẩu</title>
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
				<div class="login100-form-title" style="background-image: url('../../Dashboard/images/bg-01.jpg');">
					<span class="login100-form-title-1">
						Quên tài khoản
					</span>
				</div>

				<form action="{{ route('password.email') }}" class="login100-form validate-form" method="POST" >
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" id="email" placeholder="Nhập email">
						<span class="focus-input100"></span>
						<!-- @if($errors->has('email'))
							{{$errors->first('email')}}
						@endif -->
                    </div>
                    
                    <div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="{{ route('admin') }}" class="txt1">
								Đăng nhập
							</a>
						</div>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Xác nhận
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
