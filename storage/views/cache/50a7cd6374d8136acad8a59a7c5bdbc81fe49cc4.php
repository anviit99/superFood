
<?php $__env->startSection('title'); ?><?php echo e('categories'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <h1 class="mt-4">Dashboard</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Bảng Bài Viết
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a class="btn btn-primary" href="/small/public/admin/categoriesAdd">Thêm Bài Viết</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>

                        <th>Tên</th>
                        <th>Hành Động</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td>
                                <?php if(checkPer($_SESSION['users']['id'], 'post_edit')): ?>
                                <a class="btn btn-primary" href="/small/public/admin/categories/edit/<?php echo e($item->id); ?>">Sửa</a>
                                <?php endif; ?>
                                    <?php if(checkPer($_SESSION['users']['id'], 'post_delete')): ?>
                                <a class="btn btn-danger xoa" href="/small/public/admin/categories/delete/<?php echo e($item->id); ?>">Xóa</a>
                                        <?php endif; ?>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_js'); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/news_categories/index.blade.php ENDPATH**/ ?>