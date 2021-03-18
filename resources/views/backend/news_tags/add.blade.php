@extends('backend.layouts.masterAdmin')
@section('title'){{'Users'}}@endsection

@section('content')
    <h1 class="mt-4">Quản lý Danh Mục</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/small/public/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm Danh mục Tin tưc</li>
    </ol>
    <div style="width: 40%; margin: auto">
        <form action="/small/public/admin/tags/store" method="POST" >
            <div class="form-group">
                <label for="userFirstNameUpdate">Tiêu Đề:</label>
                <input  type="text" name="nameTags" class="form-control" id="userFirstNameUpdate" >
            </div>
            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection

