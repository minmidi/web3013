@extends('admin.master')
@section('title','galleies')
@section('active','Galleries')
@section('active_6','active')
@section('url','Sửa đường dẫn ảnh')
@section('main')
<form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf

        <!-- Danh mục sản phẩm -->
        <div class="form-group m-3">
            <label for="">Sản phẩm</label>
            <select name="product_id" id="product_id" class="form-control" >
            @foreach($products as $pro)
                <option value="{{ $pro->id}}">
                    {{ $pro->name }}
                </option>
            @endforeach
            </select>
        </div>

        <!-- Đường dẫn ảnh-->
        <div class="form-group m-3">
            <label for="" class="mt-3">Đường dẫn hình ảnh</label>
            <input type="text" class="form-control" name="img_url" id='img_url' placeholder="Nhập đường dẫn" value="{{ $galleries->img_url }}">
            <!--Gọi validate -->
            @if($errors->has('img_url'))
                {{$errors->first('img_url')}}
            @endif
        </div>

        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop
