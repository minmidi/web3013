@extends('admin.master')
@section('title','user')
@section('active','Tài khoản')
@section('active_4','active')
@section('url','Danh sách tài khoản')
@section('main')

    <form action="" method="GET" class="form-inline mb-2" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('users_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table">
        <thead>
        <tr class="table-info">
            <th scope="col">ID</th>
            <th scope="col">Tên người dùng</th>
            <th scope="col">hình ảnh</th>
            <th scope="col">Email</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $use)
        <tr>
            <td>{{ $use->id }}</td>
            <td>{{ $use->name }}</td>
            <td><img src="{{ asset('images/'.$use->images) }}" alt="hình ảnh" height="100" width="150"></td>
            <td>{{ $use->email }}</td>
            <td>
                <a href="{{ route('users_edit',['id'=>$use->id]) }}" class="edit_admin"><i class="fas fa-edit"></i></a>
            </td>
            <td>
                <a href="{{ route('users_del',['id'=>$use->id]) }}"onclick="return confirm('bạn có chắc không')" class="delete_admin"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="clearfix float-right">
        {{ $users -> links() }}
    </div>

@stop
