
<?php $__env->startSection('title'); ?><?php echo e('error|404'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo e('The page you are looking could not be found'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views/errors/404.blade.php ENDPATH**/ ?>