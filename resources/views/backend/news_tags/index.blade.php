@extends('backend.layouts.masterAdmin')
@section('title'){{'categories'}}@endsection

@section('content')


    <h1 class="mt-4">Dashboard</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Bảng Bài Viết
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a class="btn btn-primary" href="/small/public/admin/tags/create">Thêm Bài Viết</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>

                        <th>Tên</th>
                        <th>Hành Động</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($new_tags as $key => $item)

                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                @if(checkPer($_SESSION['users']['id'], 'post_edit'))
                                    <a class="btn btn-primary" href="/small/public/admin/tags/edit/{{$item->id}}">Sửa</a>
                                @endif
                                    @if(checkPer($_SESSION['users']['id'], 'post_delete'))
                                <a class="btn btn-danger xoa" href="/small/public/admin/tags/delete/{{$item->id}}">Xóa</a>
                                    @endif
                            </td>

                        </tr>
                    @endforeach

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