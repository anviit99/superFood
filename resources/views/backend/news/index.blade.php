@extends('backend.layouts.masterAdmin')
@section('title'){{'Users'}}@endsection

@section('content')

    <h1 class="mt-4">Dashboard</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Bảng Bài Viết
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a class="btn btn-primary" href="/small/public/admin/newsAdd">Thêm Bài Viết</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="display: none">ID</th>
                        {{--                        <th>Ảnh Đại Diện </th>--}}
                        <th>Ảnh</th>
                        <th>Tiêu Đề</th>
                        <th>Mô tả </th>
                        <th>Tác Giả</th>
                        <th>Danh Mục</th>
                        <th>Tag</th>
                        <th>Hành Động</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($news as $key => $news)

                            <tr>
                                <td class="text-center"><img src="/small/uploads/{{$news->images}}" alt="" width="100" height="100"></td>
                                <td>{{$news->title}}</td>
                                <td>{{$news->description}}</td>
                                <td>{{$news->author}}</td>
                                <td>@foreach($categories as $category)
                                        @if($news->category_id == $category->id)
                                        {{$category->name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($newsTags as $newsTag)
                                        @if ($news->id == $newsTag->news_id)
                                            @foreach ($tags as $tag)
                                                @if($tag->id == $newsTag->tag_id)
                                                    {{$tag->name . ','}}
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @if(checkPer($_SESSION['users']['id'], 'post_edit'))
                                    <a class="btn btn-primary" href="/small/admin/news/edit/{{$news->id}}">Sửa</a>
                                    @endif
                                        @if(checkPer($_SESSION['users']['id'], 'post_delete'))
                                    <a class="btn btn-danger xoa" href="/small/admin/news/delete/{{$news->id}}">Xóa</a>
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

