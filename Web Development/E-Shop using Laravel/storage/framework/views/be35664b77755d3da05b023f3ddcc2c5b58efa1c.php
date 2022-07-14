

<?php $__env->startSection('extra-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/style-product.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <title>KASA-Shop</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="product-wrapper">
        <div class="product-image">
            <img src="<?php echo e($product->image); ?>" alt="product"/>
        </div>
        <div class="product-details">
            <div class="product-name">
                <h3><?php echo e($product->name); ?></h3>
            </div>
            <div class="product-description">
                <p><?php echo e($product->fulldescription); ?></p>
            </div>
            <div class="product-price">
                <h4>$<?php echo e($product->price); ?></h4>
            </div>
            <div class="buy-btn">
                <a href="<?php echo e(route('add.to.cart', $product->id)); ?>"><button>Add to cart</button></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\magazinfinal\resources\views/product.blade.php ENDPATH**/ ?>