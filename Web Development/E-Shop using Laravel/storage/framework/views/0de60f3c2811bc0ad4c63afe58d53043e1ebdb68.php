<!DOCTYPE html>
<html>
    <head>
        <title>All</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/style-reset.css')); ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo e(asset('css/style-navbar.css')); ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo e(asset('css/style-all.css')); ?>" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta http-equiv = "Content-Type" content = "text/html; charset = utf-8"/>
</head>
<body>
    <container id="nav-container">
            <h1 id="logo"><a href="index.html">KASA</a></h1>
            <div id="toggleBtn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="navbar">
                <ul>
                    <li><a href="javascript:void(0)" onclick="openNav()">Products</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="login.html">Log In</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                    <li><a href="cos.php">Cart</a></li>
                </ul>
            </nav>
        </container>   
        <div id="prod-nav">
            <div class="cat-container">
                <div class="categories">
                    <a href="magazin.php">All</a>
                    <a href="kitchen.php">Kitchen</a>
                    <a href="living.php">Living</a>
                    <a href="bedroom">Bedroom</a>
                    <a href="study">Study</a>
                    <a href="bathroom">Bathroom</a>
                    <a href="outdoors">Outdoors</a>
                </div>
            </div>
            <div id="closenav-container">
                <span onclick="closeNav()">close</span>
            </div>
        </div> 
    <body>
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
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product">
                   <img src="" class="product-image" style="width:100%" src="" alt="product"/>
                   <div class="product-overlay">
                       <form>
                       <p class="product-name"><?php echo e($product->name); ?></p>
                        <p class="product-price"><?php echo e($product->price); ?></p>
                        <button class="details-btn">Details</button>
                        <div class="add-container">
                            <input type="number" name="quantity" value="1" size="2" />
                            <input type="submit" value="Add to cart" class="btnAddAction" />
                        </div>
                       </form>
                   </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <div class="product">
                   <img src="" class="product-image" style="width:100%" src="" alt="product"/>
                   <div class="product-overlay">
                       <form>
                       <p class="product-name"></p>
                        <p class="product-price"></p>
                        <button class="details-btn">Details</button>
                        <div class="add-container">
                            <input type="number" name="quantity" value="1" size="2" />
                            <input type="submit" value="Add to cart" class="btnAddAction" />
                        </div>
                       </form>
                   </div>
                </div>

        </section>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('js/all.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\magazinfinal\resources\views/products.blade.php ENDPATH**/ ?>