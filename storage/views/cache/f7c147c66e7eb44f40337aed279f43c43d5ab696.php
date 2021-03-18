

<?php $__env->startSection('title'); ?><?php echo e('Register'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-register-image">

                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Đăng ký</h1>
                                </div>
                                <form class="user" method="post" action="/small/public/registerCheck">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="Họ và Tên ">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Mật Khẩu">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Nhập Lại Mật Khẩu">
                                    </div>
                                    <button type="submit" name="Register" class="btn btn-primary btn-user btn-block">
                                       Register
                                    </button>


                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="/small/public/forgot">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="/small/public/login">Đăng nhập</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/auth/register.blade.php ENDPATH**/ ?>