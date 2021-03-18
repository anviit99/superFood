@extends('backend.layouts.masterAdmin')
@section('title'){{'Users'}}@endsection

@section('content')
    <h1 class="mt-4">Quản lý Danh Mục</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/small/public/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm Danh mục Tin tưc</li>
    </ol>
    <div style="width: 40%; margin: auto">
        <form action="/small/public/admin/newsCategories/addUp" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="userFirstNameUpdate">Tiêu Đề:</label>
                <input  type="text" name="nameCategories" class="form-control" id="userFirstNameUpdate" ">
            </div>
            <div class="form-group">
                <select name="CategoryAdd" id="newsCategoryCategoryAdd" class="form-control">
                    <option value="0"><b>Chọn là danh mục cha:</b></option>
                    {!! $html !!}
                </select>
            </div>

            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection

