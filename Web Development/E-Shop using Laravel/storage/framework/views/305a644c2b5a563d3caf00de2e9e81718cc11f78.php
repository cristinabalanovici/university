
        <?php $__env->startSection('extra-css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/style-all.css')); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('title'); ?>
        <title>KASA-Shop</title>
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('content'); ?>
        <header>
        </header>
        <section id="products">
            <div id="filter">
                <ul id="filter-bar">
                    <li id="categoryLabel" onclick="displayCategoryFilter()" onmouseup="closeFilter()">Category</li>
                    <div id="categoryFilter">
                        <form id="categoryFilterForm">
                            <label class="filter-container">Table
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Sofa
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Chair
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Bed
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                    <li id="roomLabel" onclick="displayRoomFilter()" onmouseup="closeFilter()">Room</li>
                    <div id="roomFilter">
                        <form id="roomFilterForm">
                            <label class="filter-container">Kitchen
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Living
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Bedroom
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Study
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Bedroom
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                    <li id="colorLabel" onclick="displayColorFilter()" onmouseup="closeFilter()">Color</li>
                    <div id="colorFilter">
                        <form id="colorFilterForm">
                            <label class="filter-container">Black
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">White
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Gray
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Red
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Green
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                    <li onclick="displayPriceFilter()">Price</li>
                    <li id="materialLabel" onclick="displayMaterialFilter()" onmouseup="closeFilter()">Material</li>
                    <div id="materialFilter">
                        <form id="colorFilterForm">
                            <label class="filter-container">Plastic
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">White
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Gray
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Red
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="filter-container">Green
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </form>
                    </div>
                </ul>
                <form>
                    <input type="text" id="searchBar" placeholder="Search">
                    <button id="search-btn" type="submit"><i class="fa fa-search" style="font-size:1.5rem; color:var(--background);"></i></button>
                </form>
            </div>
        </section>
        <section id="products-section">
            <a href="<?php echo e(route('crud.crud')); ?>">CRUD</a>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product">
                   <img src="<?php echo e($product->image); ?>" class="product-image" style="width:100%" src="" alt="product"/>
                   <div class="product-overlay">
                        <div>
                            <p class="product-name"><?php echo e($product->name); ?></p>
                            <p class="product-price">$<?php echo e($product->price); ?></p>
                            <a href="<?php echo e(route('shop.show', $product->slug)); ?>"><button class="details-btn">Details</button></a>
                        </div>
                   </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/all.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\magazinfinal\resources\views/shop.blade.php ENDPATH**/ ?>