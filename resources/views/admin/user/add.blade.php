@extends('admin.master')
@section('title','users')
@section('active','Tài khoản')
@section('active_4','active')
@section('url','Thêm tài khoản')
@section('main')
<form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <!-- Tên người dùng-->
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tên người dùng</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tên người dùng">
            <!--Gọi validate -->
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>

        <!-- Ảnh người dùng -->
        <div class="form-group m-3">
            <label for="">Thêm ảnh</label>
            <input type="file" class="form-control" name="images" id='images'>
            <!--Gọi validate -->
            @if($errors->has('images'))
                {{$errors->first('images')}}
            @endif
        </div>

        <!-- Email người dùng -->
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập email</label>
            <input type="email" class="form-control" name="email" id='email' placeholder="Nhập email">
            <!--Gọi validate -->
            @if($errors->has('email'))
                {{$errors->first('email')}}
            @endif
        </div>

       <!-- Mật khẩu người dùng -->
       <div class="form-group m-3">
            <label for="" class="mt-3">Nhập mật khẩu</label>
            <input type="password" class="form-control" name="password" id='password' placeholder="Nhập mật khẩu">
            <!--Gọi validate -->
            @if($errors->has('password'))
                {{$errors->first('password')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu">
            @if($errors->has('confirm_password'))
                {{$errors->first('confirm_password')}}
            @endif
        </div>

        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop
