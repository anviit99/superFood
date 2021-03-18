@extends('backend.layouts.masterAdmin')
@section('title'){{'NewsAdd'}}@endsection

@section('content')
    <h1 class="mt-4">Quản lý bài viết</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/small/public/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm Bài Viết</li>
    </ol>
    <div style="width: 40%; margin: auto">
        <form action="/small/public/admin/news/update/{{$news->id}}" method="POST" >
        <div class="form-group">
            <label for="userFirstNameUpdate">Tiêu Đề:</label>
            <input  type="text" name="title" class="form-control" id="userFirstNameUpdate" value="{{$news->title}}">
        </div>
        <div class="form-group">
                <label for="userEmailUpdate">Mô Tả:</label>
            <input  type="text" name="description" class="form-control" id="userEmailUpdate" value="{{$news->description}}">
        </div>
            <div class="form-group">
                <label for="newsContentAdd">Nội dung:</label>
                <textarea type="text" name="newsContentAdd" class="form-control"
                          id="newsContentAdd" value="{{$news->content}}"></textarea>
            </div>
        <div class="form-group">
            <label for="">Tác Giả</label>
            <input type="text" name="author" class="form-control" id="userRepasswordUpdate" value="{{$news->author}}">
        </div>
        <div class="form-group">
            <label for="userRoleUpdate">Danh mục</label>
            <select name="newsCategoryUpdate" class="form-control" id="userRoleUpdate">
                <option value="0">Chọn làm danh mục cha:</option>
                {!! $html !!}
                </select>
            </div>
            <div class="form-group">
                <label>Tag:</label>
                @foreach ($tags as $key => $tag)
                    <label style="display: inline-block; width: 100%;">
                        <input style="margin-right: 5px" name="tags[]"
                               @foreach ($newsTags as $key => $newsTag)
                               @if ($news->id == $newsTag->news_id)
                               @if($tag->id == $newsTag->tag_id)
                               checked
                               @endif
                               @endif
                               @endforeach
                               type="checkbox" value="{{$tag->id}}">{{$tag->name}}
                    </label>
                @endforeach
            </div>
            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection
@section('footer_js')
    <script>
        $('.perChecked input').each(function() {
            $(this).click(function (){
                if($(this).prop("checked") === true) {
                    $(this).parent().next().children().prop('checked', true)
                    $(this).parent().next().next().children().prop('checked', true)
                    $(this).parent().next().next().next().children().prop('checked', true)
                    $(this).parent().next().next().next().next().children().prop('checked', true)
                }
                else if($(this).prop("checked") === false) {
                    $(this).parent().next().children().prop('checked', false)
                    $(this).parent().next().next().children().prop('checked', false)
                    $(this).parent().next().next().next().children().prop('checked', false)
                    $(this).parent().next().next().next().next().children().prop('checked', false)
                }
            })
        });
        CKEDITOR.replace('newsContentAdd');
    </script>
@endsection
