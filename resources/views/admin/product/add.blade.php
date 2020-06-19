@extends('admin.master')
@section('title','product')
@section('active','Sản phẩm')
@section('url','Thêm sản phẩm')
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tiêu đề</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tiêu đề">
            <!--Gọi validate -->
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>



        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop
