@extends('backend.layouts.masterAdmin')
@section('title'){{'Users'}}@endsection

@section('content')
    <h1 class="mt-4">Quản lý người dùng</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/small/public/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm người dùng</li>
    </ol>
    <div style="width: 40%; margin: auto">
        <form action="/small/public/user/update" method="POST" enctype="multipart/form-data">
            <div class="form-group position-relative text-center">
                        <img class="imagesForm" width="100" src=""/>
                        <label class="formLabel" for="fileToAddUser"><i class="fas fa-pen"></i><input
                                    style="display: none" type="file" id="fileToAddUser"
                                    name="fileToUpload"></label>
            </div>

        <div class="form-group">
            <label for="userFirstNameUpdate">Tên:</label>
            <input  type="text" name="name" class="form-control" id="userFirstNameUpdate">
        </div>


        <div class="form-group">
            <label for="userEmailUpdate">Email:</label>
            <input  type="text" name="email" class="form-control" id="userEmailUpdate">
        </div>
        <div class="form-group">
            <label for="userPasswordUpdate">Mật khẩu:</label>
            <input type="password" name="password" class="form-control" id="userPasswordUpdate">
        </div>
        <div class="form-group">
            <label for="userRepasswordUpdate">Nhập lại mật khẩu:</label>
            <input type="password" name="password" class="form-control" id="userRepasswordUpdate">
        </div>
        <div class="form-group">
            <label for="userRoleUpdate">Nhóm quyền:</label>
            <select name="role_id" class="form-control" id="userRoleUpdate">
                    <option value="">Quyền</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>





@endsection

