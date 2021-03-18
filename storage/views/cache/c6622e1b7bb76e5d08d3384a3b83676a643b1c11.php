
<?php $__env->startSection('title'); ?><?php echo e('product'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    div class="customize">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                <h2 class="title__heading">Easy to Customize</h2>
                <div class="divider mx-auto"></div>
                <p class="title__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do eiusmod.</p>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-lg-4">
                <div class="customize__box">
                    <div class="customize__box-image animate__animated animate__fadeInLeft wow">
                        <a href="/small/public/superFood/products/<?php echo e($item->id); ?>"><img src="<?php echo e(BASE_URL); ?>Frontend/assets<?php echo e($item->images); ?>" alt=""></a>
                    </div>
                    <div class="customize__box-item animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                        <div class="item__title"><?php echo e($item->name); ?></div>
                        <p class="item__text"><?php echo e($item->description); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/frontend/products/index.blade.php ENDPATH**/ ?>