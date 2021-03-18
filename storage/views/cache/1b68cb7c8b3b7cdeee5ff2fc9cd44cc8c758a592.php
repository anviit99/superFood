
<?php $__env->startSection('title'); ?><?php echo e('Users'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                    <?php echo $html; ?>

                </select>
            </div>

            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/news_categories/add.blade.php ENDPATH**/ ?>