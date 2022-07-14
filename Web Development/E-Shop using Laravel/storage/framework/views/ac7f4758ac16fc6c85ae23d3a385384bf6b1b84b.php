        <?php $__env->startSection('extra-css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/style-index.css')); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('title'); ?>
        <title>KASA</title>
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('content'); ?>
        <header>
            <div id="hero">
            </div>
            <div id="hero-text">
                <div id="title-container">
                    <p class="title" style="padding-top:200px;">Discover innovative</p>
                    <p class="title">ways to decorate</p>
                </div>
                <div id="title-info">
                   <p>We provide unmatched quality, comfort and style for property owners. Our experts combine form and function in bringing your vision to life. Create a room in your own style with our collection and make your home a reflection of you and what you love.</p> 
                </div>
                <div id="shop-now">
                    <h3>
                        <a href='javascript:void(0)' onclick="openNav()" onmouseover="showArrow()" onmouseout="hideArrow()">Shop now! <i id="arrow-right"></i></a>
                    </h3>
                </div>
            </div>
        </header>
        <section id="why-us">
            <div id="delivery">
                <div class="icon">
                    <i class="fa fa-truck" style="font-size: 60px;"></i>
                </div>
                <div class="why-us-desc">
                    <p>Delivery in 1-2 days</p>
                </div>
            </div>
            <div id="customer-care">
                <div class="icon">
                    <i class="fa fa-phone" style="font-size: 60px;"></i>
                </div>
                <div class="why-us-desc">
                    <p>Immediate customer support</p>
                </div>
            </div>
            <div id="quality">
                <div class="icon">
                    <i class="fa fa-bed" style="font-size: 60px;"></i>
                </div>
                <div class="why-us-desc">
                    <p>Top quality guaranteed</p>
                </div>
            </div>
        </section>
        <section id="about-furniture">
            <div id="about-furniture-pic1"></div>
            <div id="about-furniture-text">
                <h4>About our furniture</h4>
                <p>Our multifunctional collection blends design and function to suit your individual taste. Make each room unique, or pick a cohesive theme to best express your interests and what inspires you. Find the furniture pieces you need from traditional to contemporary styles or anything in between. Product specialists are available to help you create your dream space.</p>
            </div>
            <div id="about-furniture-pic2"></div>
        </section>
        <section id="furniture-image"></section>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\magazinfinal\resources\views/landing-page.blade.php ENDPATH**/ ?>