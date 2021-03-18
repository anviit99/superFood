
<?php $__env->startSection('title'); ?><?php echo e('Register'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <form action="/small/public/registerCheck" method="POST">
                <div class="login-form">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                        <span class="error"><?php ?></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        <span class="error"><?php  ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="error"><?php  ?></span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confPassword" class="form-control" placeholder="Confirm Password">
                        <span class="error"><?php  ?></span>
                    </div>
                    <button class="btn btn-black">Register</button>
                </div>
            </form>
        </div>
    </div>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/auth/register.blade.php ENDPATH**/ ?>