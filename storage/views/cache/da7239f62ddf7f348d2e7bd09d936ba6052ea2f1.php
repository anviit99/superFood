
<?php $__env->startSection('title'); ?><?php echo e('Users'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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

                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td class="text-center"><img src="/small/uploads/<?php echo e($news->images); ?>" alt="" width="100" height="100"></td>
                                <td><?php echo e($news->title); ?></td>
                                <td><?php echo e($news->description); ?></td>
                                <td><?php echo e($news->author); ?></td>
                                <td><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($news->category_id == $category->id): ?>
                                        <?php echo e($category->name); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $newsTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($news->id == $newsTag->news_id): ?>
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($tag->id == $newsTag->tag_id): ?>
                                                    <?php echo e($tag->name . ','); ?>

                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php if(checkPer($_SESSION['users']['id'], 'post_edit')): ?>
                                    <a class="btn btn-primary" href="/small/admin/news/edit/<?php echo e($news->id); ?>">Sửa</a>
                                    <?php endif; ?>
                                        <?php if(checkPer($_SESSION['users']['id'], 'post_delete')): ?>
                                    <a class="btn btn-danger xoa" href="/small/admin/news/delete/<?php echo e($news->id); ?>">Xóa</a>
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


<?php echo $__env->make('backend.layouts.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/news/index.blade.php ENDPATH**/ ?>