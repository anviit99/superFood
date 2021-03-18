
<?php $__env->startSection('title'); ?><?php echo e('Login'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="sidenav">
        <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <form action="" method="POST">
                <div class="login-form">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" value="">
                    </div>
                    <div class="row align-items-center remember">

                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me" value="1">Remember Me
                    </div>
                    <button name="login" class="btn btn-black">Login</button>
                    <a href="/small/public/register" class="btn btn-secondary">Register</a>
                    <a href="forgot.php" style="color: black !important;">Forgot your password?</a>
                </div>
            </form>
        </div>
    </div>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/auth/login.blade.php ENDPATH**/ ?>