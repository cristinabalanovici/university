<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(asset('css/style-index.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/style-reset.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/style-navbar.css')); ?>">
        <title>KASA</title>
        <script>
            function toggleNav() {
                var x=document.getElementsByTagName('nav');
                if (x.style.display === "block") {
                    x.style.display ="none";
                }
                else {
                    x.style.display="block";
                }
            }
        </script>
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
                    <li><a href="#">Log In</a></li>
                    <li><a href="#">Log Out</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </nav>
        </container>   
        <div id="prod-nav">
            <div class="cat-container">
                <div class="categories">
                    <a href="magazin.php">All</a>
                    <a href="#">Kitchen</a>
                    <a href="#">Living</a>
                    <a href="#">Bedroom</a>
                    <a href="#">Study</a>
                    <a href="#">Bathroom</a>
                    <a href="#">Outdoors</a>
                </div>
            </div>
            <div id="closenav-container">
                <span onclick="closeNav()">close</span>
            </div>
        </div> 
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
        <footer>
            <div id="footer-container">
                <div id="shopping">
                    <p>Shopping</p>
                    <ul>
                        <li>Products</li>
                        <li>Gift cards</li>
                    </ul>
                </div>
                <div id="contact">
                    <p>Contact</p>
                    <ul>
                        <li>Contact us</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <div id="delivery-info">
                    <p>Delivery and pick up</p>
                    <ul>
                        <li>Delivery</li>
                        <li>Pick up</li>
                        <li>Buy-back</li>
                    </ul>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\magazinfinal\resources\views/welcome.blade.php ENDPATH**/ ?>