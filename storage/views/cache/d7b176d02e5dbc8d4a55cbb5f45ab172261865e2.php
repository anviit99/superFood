<?php
if(!isset($_SESSION['users'])) {
header("location:login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <link href="<?php echo e(BASE_URL.'BackEnd/assets/css/style.css'); ?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
</head>
<body class="sb-nav-fixed">
<div class="container">
    <?php echo $__env->make('backend.layouts.menuAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('backend.layouts.navbarAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">


                    <?php echo $__env->yieldContent('content'); ?>


        </div>
    </div>
    <?php echo $__env->make('backend.layouts.footerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(BASE_URL.'BackEnd/assets/js/scripts.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(BASE_URL.'BackEnd/assets/demo/chart-area-demo.js'); ?>"></script>
<script src="<?php echo e(BASE_URL.'BackEnd/assets/demo/chart-bar-demo.js'); ?>"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="<?php echo e(BASE_URL.'BackEnd/assets/demo/datatables-demo.js'); ?>"></script>
<?php echo $__env->yieldContent('footer_js'); ?>
</body>
</html>
<?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/layouts/masterAdmin.blade.php ENDPATH**/ ?>