@extends('admin.master')
@section('title','product')
@section('active','Sản phẩm')
@section('url','Thêm sản phẩm')
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <!-- Tên sản phẩm-->
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tên sản phẩm</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tiêu đề">
            <!--Gọi validate -->
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>

        <!-- Ảnh sản phẩm -->
        <div class="form-group m-3">
            <label for="">Thêm ảnh</label>
            <input type="file" class="form-control" name="images" id='images'>
            <!--Gọi validate -->
            @if($errors->has('images'))
                {{$errors->first('images')}}
            @endif
        </div>

        <!-- Giá sản phẩm -->
        <div class="form-group m-3">
            <label for="" class="mt-3">Giá sản phẩm</label>
            <input type="text" class="form-control" name="price" id='price' placeholder="Nhập giá phòng">
            <!--Gọi validate -->
            @if($errors->has('price'))
                {{$errors->first('price')}}
            @endif
        </div>

        <!-- Mô tả ngắn sản phẩm -->
        <div class="form-group m-3">
            <label for="">Mô tả ngắn</label>
            <textarea class="form-control" name="short_desc" id="short_desc" placeholder="Nhập mô tả ngắn" rows="5"></textarea>
            @if($errors->has('short_desc'))
                {{$errors->first('short_desc')}}
            @endif
        </div>

        <!-- Mô tả chi tiết sản phẩm -->
        <div class="form-group m-3">
            <label for="">Mô tả chi tiết</label>
            <textarea class="form-control" name="detail" id="detail" placeholder="Nhập mô tả chi tiết" rows="10"></textarea>
            @if($errors->has('detail'))
                {{$errors->first('detail')}}
            @endif
        </div>

        <!-- Số sao sản phẩm -->
        <div class="form-group m-3">
            <label for="">Số sao đánh giá</label>
            <select class="form-control" name="star" id="star">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            @if($errors->has('star'))
                {{$errors->first('star')}}
            @endif
        </div>

        <!-- Số sao sản phẩm -->
        <div class="form-group m-3">
            <label for="" class="mt-3">Lượt xem</label>
            <input type="number" class="form-control" name="views" id='views' placeholder="Nhập số lượt xem">
            <!--Gọi validate -->
            @if($errors->has('views'))
                {{$errors->first('views')}}
            @endif
        </div>

        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop
