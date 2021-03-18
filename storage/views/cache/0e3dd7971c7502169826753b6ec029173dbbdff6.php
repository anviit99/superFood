
<?php $__env->startSection('title'); ?><?php echo e('Users'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mt-4">Quản lý người dùng</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/small/public/home">Dashboard</a></li>
        <li class="breadcrumb-item active">Thêm người dùng</li>
    </ol>
    <div style="width: 40%; margin: auto">
        <form action="/small/public/user/update" method="POST" enctype="multipart/form-data">
            <div class="form-group position-relative text-center">
                        <img class="imagesForm" width="100" src=""/>
                        <label class="formLabel" for="fileToAddUser"><i class="fas fa-pen"></i><input
                                    style="display: none" type="file" id="fileToAddUser"
                                    name="fileToUpload"></label>
            </div>

        <div class="form-group">
            <label for="userFirstNameUpdate">Tên:</label>
            <input  type="text" name="name" class="form-control" id="userFirstNameUpdate">
        </div>


        <div class="form-group">
            <label for="userEmailUpdate">Email:</label>
            <input  type="text" name="email" class="form-control" id="userEmailUpdate">
        </div>
        <div class="form-group">
            <label for="userPasswordUpdate">Mật khẩu:</label>
            <input type="password" name="password" class="form-control" id="userPasswordUpdate">
        </div>
        <div class="form-group">
            <label for="userRepasswordUpdate">Nhập lại mật khẩu:</label>
            <input type="password" name="password" class="form-control" id="userRepasswordUpdate">
        </div>
        <div class="form-group">
            <label for="userRoleUpdate">Nhóm quyền:</label>
            <select name="role_id" class="form-control" id="userRoleUpdate">
                    <option value="">Quyền</option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <button class="btn btn-primary">Thêm</button>
        </form>
    </div>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.masterAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/users/add.blade.php ENDPATH**/ ?>