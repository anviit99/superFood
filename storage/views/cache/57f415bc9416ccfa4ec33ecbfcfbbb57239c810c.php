
<?php $__env->startSection('title'); ?><?php echo e('Users'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mt-4">Quản lý bài viết</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/small/public/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm Bài Viết</li>
    </ol>
    <div style="width: 40%; margin: auto">
        <form action="/small/public/admin/news/store" method="POST" enctype="multipart/form-data">
            <div class="form-group position-relative text-center">

                        <img class="imagesForm" width="100" />
                        <label class="formLabel" for="fileToAddUser"><i class="fas fa-pen"></i><input
                                    style="display: none" type="file" id="fileToAddUser"
                                    name="uploadImg"> Thêm Ảnh</label>
            </div>
        <div class="form-group">
            <label for="userFirstNameUpdate">Tiêu Đề:</label>
            <input  type="text" name="title" class="form-control" id="userFirstNameUpdate" ">
        </div>
        <div class="form-group">
                <label for="userEmailUpdate">Mô Tả:</label>
            <input  type="text" name="description" class="form-control" id="userEmailUpdate">
        </div>
            <div class="form-group">
                <label for="newsContentAdd">Nội dung:</label>
                <textarea type="text" name="newsContentAdd" class="form-control"
                          id="newsContentAdd"></textarea>
            </div>
        <div class="form-group">
            <label for="">Tác Giả</label>
            <input type="text" name="author" class="form-control" id="userRepasswordUpdate">
        </div>
        <div class="form-group">
            <label for="userRoleUpdate">Danh mục</label>
            <select name="newsCategoryUpdate" class="form-control" id="userRoleUpdate">
                <option value="0">Chọn làm danh mục cha:</option>
                <?php echo $html; ?>

            </select>
            </div>
            <div class="form-group">
                <label>Tag:</label>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label style="display: inline-block; width: 100%;"><input style="margin-right: 5px" name="tags[]" type="checkbox" value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/news/add.blade.php ENDPATH**/ ?>