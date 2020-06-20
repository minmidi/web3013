@extends('admin.master')
@section('title','categories')
@section('active','Danh mục')
@section('active_2','active')
@section('url','Thêm danh mục')
@section('main')

<form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <!-- Tên sản phẩm-->
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tên danh mục</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập danh mục sản phẩm">
            <!--Gọi validate -->
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>

        <!-- Slug sản phẩm -->
        <div class="form-group m-3">
            <label for="" class="mt-3">Slug sản phẩm</label>
            <input type="text" class="form-control" name="slug" id='slug' placeholder="Nhập slug">
            <!--Gọi validate -->
            @if($errors->has('slug'))
                {{$errors->first('slug')}}
            @endif
        </div>

        <!-- Kích hoạt sản phẩm -->
        <div class="form-group m-3">
            <label for="">Trạng thái</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" checked="checked">
                    Không kích hoạt
                </label>
                <label>
                    <input type="radio" name="status" value="1" checked="checked">
                    Kích hoạt
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop

@section('script')
    <script src="{{ asset('Dashboard/js/slug.js') }}"></script>
@stop