@extends('backend.layouts.masterAdmin')
@section('title'){{'Users'}}@endsection

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Bảng sản phẩm
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(checkPer($_SESSION['users']['id'], 'user_add'))
                <a class="btn btn-primary" href="/small/public/user/add">Thêm Tài Khoản</a>
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="display: none">ID</th>
{{--                        <th>Ảnh Đại Diện </th>--}}
                        <th>Images</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
                    </tr>
                    </thead>
                    <tbody>

                     <?php
                         foreach ($users as $item){
                             ?>
                             <tr>
                                 <td style="display:none">
                                     <?php echo $item['id']; ?>
                                 </td>
                                 <td class="text-center"><img src="/small/uploads<?php echo $item['image']?>" alt="" width="100" height="100"></td>
{{--                                 <td>{{$news->title}}</td>--}}
                                 <td><?php echo $item['name']; ?></td>
                                 <td><?php echo $item['email']; ?></td>

                                 <?php
                                 $status = $item['status'];
                                 if ($status == 0) {
                                 $strStatus = "<a class='toggle-class btn btn-danger btn-sm' href=/small/public/home/active/" . $item['id'] . ">Không hoạt động</a>";
                                 }
                                 if ($status == 1) {
                                 $strStatus = "<a class='toggle-class btn btn-primary btn-sm' href=/small/public/home/deactivate/" . $item['id'] . ">Hoạt động</a>";
                                 }
                                 ?>
                                 @if(checkPer($_SESSION['users']['id'], 'user_edit'))
                                 <td><?php echo $strStatus ?></td>
                                 <td>
                                     <a href="/small/public/user/editUser/{{$item['id']}}"  class="btn btn-primary ">Sửa</a>
                                     @endif
                                         @if(checkPer($_SESSION['users']['id'], 'user_delete'))
                                     <a href="/small/public/home/deleteUser/{{$item['id']}}" id="b4"  class="btn btn-danger xoa">Xóa</a>
                                             @endif
                                 </td>

                             </tr>
                     <?php
                         }
                     ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@section('footer_js')

    <script>


        $(document).ready(function () {
            $( ".xoa" ).click(function( event ) {
                event.preventDefault();
                Swal.fire({
                    title: 'Bạn có chắc chăn muốn xóa?',
                    text: "Dữ liệu bị xóa sẽ không thể khôi phục lại được!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Vâng, Xóa nó!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = $(this).attr('href');
                    }
                });
            });
        });

    </script>
@endsection
