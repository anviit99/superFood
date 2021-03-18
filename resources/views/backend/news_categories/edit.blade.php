@extends('backend.layouts.masterAdmin')
@section('title'){{'Users'}}@endsection

@section('content')
    <h1 class="mt-4">Quản lý Danh mục tin tức</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/small/public/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Sửa Bài viết</li>
    </ol>
    <div style="width: 40%; margin: auto">
        <form action="/small/public/admin/categories/update/{{$categories->id}}" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="userFirstNameUpdate">Tiêu Đề:</label>
                <input  type="text" name="name" class="form-control" id="userFirstNameUpdate" value="{{$categories->name}}">
            </div>

            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection

