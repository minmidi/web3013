@extends('admin.master')
@section('title','categories')
@section('active','Danh mục')
@section('active_2','active')
@section('url','Danh mục sản phẩm')
@section('main')


    <form action="" method="GET" class="form-inline mb-2" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('categories_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table">
        <thead>
        <tr class="table-info">
            <th scope="col">ID</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col">Kích hoạt</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $cate)
        <tr>
            <td>{{ $cate->id }}</td>
            <td>{{ $cate->name }}</td>
            <td>{{ $cate->status }}</td>
            <td>
                <a href="{{ route('categories_edit',['id'=>$cate->id]) }}" class="edit_admin"><i class="fas fa-edit"></i></a>
            </td>
            <td>
                <a href="{{ route('categories_del',['id'=>$cate->id]) }}"onclick="return confirm('bạn có chắc không')" class="delete_admin"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="clearfix float-right">
        {{ $categories -> links() }}
    </div>

@stop
