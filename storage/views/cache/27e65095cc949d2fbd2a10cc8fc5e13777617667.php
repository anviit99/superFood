
<?php $__env->startSection('title'); ?><?php echo e('Users'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mt-4">Quản lý Tags</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/small/public/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Sửa tags</li>
    </ol>
    <div style="width: 40%; margin: auto">
        <form action="/small/public/admin/tags/update/<?php echo e($tags->id); ?>" method="POST" >
            <div class="form-group">
                <label for="userFirstNameUpdate">Tiêu Đề:</label>
                <input  type="text" name="nameTags" class="form-control" id="userFirstNameUpdate" value="<?php echo e($tags->name); ?>" >
            </div>
            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/news_tags/edit.blade.php ENDPATH**/ ?>