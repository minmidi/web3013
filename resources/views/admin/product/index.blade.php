@extends('admin.master')
@section('title','product')
@section('active','Sản phẩm')
@section('active_1','active')
@section('url','Danh sách sản phẩm')
@section('main')

    <form action="" method="GET" class="form-inline mb-2" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('products_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table">
        <thead>
        <tr class="table-info">
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">hình ảnh</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Giá sản phẩm</th>
            <th scope="col">Đánh giá</th>
            <th scope="col">Lượt xem</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $pro)
        <tr>
            <td>{{ $pro->id }}</td>
            <td>{{ $pro->name }}</td>
            <td><img src="{{ asset('images/'.$pro->images) }}" alt="hình ảnh" height="100" width="150"></td>
            <td>{{ $pro->categories->name }}</td>
            <td>{{ $pro->price }}</td>
            <td>{{ $pro->star }}</td>
            <td>{{ $pro->views }}</td>
            <td>
                <a href="{{ route('products_edit',['id'=>$pro->id]) }}" class="edit_admin"><i class="fas fa-edit"></i></a>
            </td>
            <td>
                <a href="{{ route('products_del',['id'=>$pro->id]) }}"onclick="return confirm('bạn có chắc không')" class="delete_admin"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="clearfix float-right">
        {{ $products -> links() }}
    </div>

@stop
