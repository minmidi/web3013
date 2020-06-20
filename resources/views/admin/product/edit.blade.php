@extends('admin.master')
@section('title','product')
@section('active','Sản phẩm')
@section('active_1','active')
@section('url','Sửa sản phẩm: '.$products->name)
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
    @csrf
    <!-- Tên sản phẩm-->
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tên sản phẩm</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tiêu đề" value="{{ $products->name }}">
            <!--Gọi validate -->
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>

        <!-- Ảnh sản phẩm -->
        <div class="form-group m-3">
            <label for="">Thêm ảnh</label>
            <div class="mb-3">
                <img src="{{ asset('images/'.$products->images) }}" alt="Ảnh" style="width: 200px; height:150px;">
            </div>
            <input type="file" class="form-control" name="images" id='images'>
            <!--Gọi validate -->
            @if($errors->has('images'))
                {{$errors->first('images')}}
            @endif
        </div>

        <!-- Danh mục sản phẩm -->
        <div class="form-group m-3">
            <label for="">Danh mục sản phẩm</label>
            <select name="cate_id" id="cate_id" class="form-control" >
            @foreach($category as $cate)
                <option value="{{ $cate->id}}">
                    {{ $cate->name }}
                </option>
            @endforeach
            </select>
        </div>

        <!-- Giá sản phẩm -->
        <div class="form-group m-3">
            <label for="" class="mt-3">Giá sản phẩm</label>
            <input type="text" class="form-control" name="price" id='price' placeholder="Nhập giá phòng" value="{{ $products->price }}">
            <!--Gọi validate -->
            @if($errors->has('price'))
                {{$errors->first('price')}}
            @endif
        </div>

        <!-- Mô tả ngắn sản phẩm -->
        <div class="form-group m-3">
            <label for="">Mô tả ngắn</label>
            <textarea class="form-control" name="short_desc" id="short_desc" placeholder="Nhập mô tả ngắn" rows="5">{{ $products->short_desc }}</textarea>
            @if($errors->has('short_desc'))
                {{$errors->first('short_desc')}}
            @endif
        </div>

        <!-- Mô tả chi tiết sản phẩm -->
        <div class="form-group m-3">
            <label for="">Mô tả chi tiết</label>
            <textarea class="form-control" name="detail" id="detail" placeholder="Nhập mô tả chi tiết" rows="10">{{ $products->detail }}</textarea>
            @if($errors->has('detail'))
                {{$errors->first('detail')}}
            @endif
        </div>

        <!-- Số sao sản phẩm -->
        <div class="form-group m-3">
            <label for="">Số sao đánh giá</label>
            <select class="form-control" name="star" id="star" value="{{ $products->price }}">
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
            <input type="number" class="form-control" name="views" id='views' placeholder="Nhập số lượt xem" value="{{ $products->views }}">
            <!--Gọi validate -->
            @if($errors->has('views'))
                {{$errors->first('views')}}
            @endif
        </div>

        <button type="submit" class="btn btn-primary m-3">Lưu lại</button>
    </form>
@stop
