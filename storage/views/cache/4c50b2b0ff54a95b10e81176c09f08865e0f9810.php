
<?php $__env->startSection('title'); ?><?php echo e('detail'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="customize">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                <h2 class="title__heading">Easy to Customize</h2>
                <div class="divider mx-auto"></div>
                <p class="title__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do eiusmod.</p>
            </div>
        </div>
        <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="customize__box">
                        <div class="customize__box-image animate__animated animate__fadeInLeft wow">
                            <a href="/small/public/superFood/products/<?php echo e($product->id); ?>"><img src="<?php echo e(BASE_URL); ?>Frontend/assets<?php echo e($product->images); ?>" alt=""></a>
                        </div>
                        <div class="customize__box-item animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                            <div class="item__title"><?php echo e($product->name); ?></div>
                            <p class="item__text"><?php echo e($product->description); ?></p>
                        </div>
                    </div>
                </div>
            <div class="col-12 col-lg-8">
                <div class="customize__box">



                    <div class="section-detail clearfix">



                        <div class="detail fl-right">


                            <p class="product-code">Mã sản phẩm: <span>An Vi Shop</span></p>
                            <div class="desc-short">
                                <h5>Mô tả sản phẩm:</h5>
                                <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản</p>
                            </div>
                            <p class="price">Giá:    <?php echo e($product->price); ?></p>
                            <div class="num-order-wp">
                                <span>Số lượng:</span>
                                <input type="number" min="1" max="10" name="" value="" class="num-order">

                                <a href="/small/public/superFood/products/add/<?php echo e($product->id); ?>" title="" class="btn btn-primary">Thêm giỏ hàng</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xamp\htdocs\small\resources\views/frontend/products/detail.blade.php ENDPATH**/ ?>