@extends('admin.master')
@section('title','product')
@section('active','Sản phẩm')
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
            <th scope="col">name</th>
            <th scope="col">image</th>
            <th scope="col">price</th>
            <th scope="col">star</th>
            <th scope="col">views</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $pro)
        <tr>
            <td>{{ $pro->id }}</td>
            <td>{{ $pro->name }}</td>
            <td>{{ $pro->image }}</td>
            <td>{{ $pro->price }}</td>
            <td>{{ $pro->star }}</td>
            <td>{{ $pro->views }}</td>
            <td>
                <a href="" class="edit_admin"><i class="fas fa-edit"></i></a>
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