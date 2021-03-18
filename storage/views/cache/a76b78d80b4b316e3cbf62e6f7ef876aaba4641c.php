<?php if(!checkPer($_SESSION['users']['id'], 'role_view')): ?>
    <?php (header('Location: /superFood/admin/dashboard')); ?>
<?php endif; ?>


<?php $__env->startSection('title'); ?><?php echo e('Roles'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <h1 class="mt-4">Sửa quyền</h1>
        <ol class="breadcrumb mb-4" style="background: white">
            <li class="breadcrumb-item"><a href="/small/public/admin/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Sửa quyền</li>
        </ol>
        <form action="/small/public/admin/roles/update/<?php echo e($roles->id); ?>" method="POST">
            <div class="role__content row">
                <div class="col-md-4">
                    <div class="role__left">
                        <div class="form-group">
                            <label for="roleNameUpdate">Tên quyền:</label>
                            <input type="text" name="roleNameUpdate" class="form-control" id="roleNameUpdate" value="<?php echo e($roles->name); ?>">
                        </div>
                        <button type="submit"
                                class="btn btn-primary addBtn">Lưu
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="role__right">
                        <?php ($code = ''); ?>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php ($module_name = @explode('_', $permission->code)[0]); ?>
                            <?php if($module_name != $code): ?>
                                <?php ($code = $module_name); ?>
                                <?php if($module_name === "post"): ?>
                                    <?php ( $module_name = "Bài viết" ); ?>
                                <?php elseif($module_name === "product"): ?>
                                    <?php ($module_name = "Sản phẩm"); ?>
                                <?php elseif($module_name === "role"): ?>
                                    <?php ($module_name = "Quyền"); ?>
                                <?php elseif($module_name === "user"): ?>
                                    <?php ($module_name = "Người dùng"); ?>
                                <?php elseif($module_name === "animation"): ?>
                                    <?php ($module_name = "Hiệu ứng"); ?>
                                <?php elseif($module_name === "widget"): ?>
                                    <?php ($module_name = "Widget"); ?>
                                <?php endif; ?>
                                <label class='perChecked' style="margin-top: 30px">
                                    <input
                                            style='margin-right: 5px;'
                                            name='inputPers'
                                            type='checkbox' checked
                                            value="<?php echo e($permission->id); ?>"><?php echo e($module_name); ?>

                                </label>
                            <?php endif; ?>

                            <label style="display: inline-block; width: 100%; margin-left: 20px">
                                <input style="margin-right: 5px;" name="pers[]"
                                       type="checkbox"
                                       <?php ($pers_checked = []); ?>
                                       <?php $__currentLoopData = $role_permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php ($pers_checked[] = $role_permission->permission_id); ?>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php if(in_array($permission->id, $pers_checked)): ?>
                                       checked
                                       <?php endif; ?>
                                       value="<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
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
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/roles/edit.blade.php ENDPATH**/ ?>