
<?php $__env->startSection('title'); ?><?php echo e('Users'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mt-4">Dashboard</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Bảng sản phẩm
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a class="btn btn-primary" href="/small/public/user/add">Thêm Tài Khoản</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Module ID</th>
                        
                        <th>Tên Module</th>


                        <th>Quyền</th>
                        <th>Cho Phép</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_js'); ?>
<?php echo $__env->make('backend.layouts.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/author/index.blade.php ENDPATH**/ ?>