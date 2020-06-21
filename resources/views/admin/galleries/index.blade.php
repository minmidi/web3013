@extends('admin.master')
@section('title','galleies')
@section('active','Galleries')
@section('active_6','active')
@section('url','Danh mục ảnh sản phẩm')
@section('main')


    <form action="" method="GET" class="form-inline mb-2" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('galleries_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table">
        <thead>
        <tr class="table-info">
            <th scope="col">ID</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">URL hình ảnh</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gallery as $gal)
        <tr>
            <td>{{ $gal->id }}</td>
            <td>{{ $gal->product->name }}</td>
            <td>{{ $gal->img_url }}</td>
            <td>
                <a href="{{ route('galleries_edit',['id'=>$gal->id]) }}" class="edit_admin"><i class="fas fa-edit"></i></a>
            </td>
            <td>
                <a href="{{ route('galleries_del',['id'=>$gal->id]) }}"onclick="return confirm('bạn có chắc không')" class="delete_admin"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="clearfix float-right">
        {{ $gallery -> links() }}
    </div>

@stop
