<?php
    require_once "ShoppingCart.php";
    session_start();
    // Dacă utilizatorul nu este conectat redirecționează la pagina de autentificare ...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: login.html');
        exit;
    }
    // pt membrii inregistrati
    $id_member=$_SESSION['loggedin'];
    $shoppingCart = new ShoppingCart();
    if (! empty($_GET["action"])) {
        switch ($_GET["action"]) {
            case "add":
                if (! empty($_POST["quantity"])) {
                    $productResult = $shoppingCart->getProductByCode($_GET["code"]);
                    $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $id_member);
                    if (! empty($cartResult)) {
                        // Modificare cantitate in cos
                        $newQuantity = $cartResult[0]["quantity"] +
                        $_POST["quantity"];
                        $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
                    } 
                    else {
                        // Adaugare in tabelul cos
                        $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $id_member);
                    }
                }
                break;
            case "remove":
                // Sterg o sg inregistrare
                $shoppingCart->deleteCartItem($_GET["id"]);
                break;
            case "empty":
                // Sterg cosul
                $shoppingCart->emptyCart($id_member);
                break;
            }
    }
?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="styles/style-reset.css" type="text/css"/>
        <link rel="stylesheet" href="styles/style-navbar.css" type="text/css"/>
        <link rel="stylesheet" href="styles/style-cos.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>Magazin</title>
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
            <h2>Cart</h2>
        </header>
        <br><br><br><br><br><br>
        <section id="shopping-cart">
        
        <?php
            $cartItem = $shoppingCart->getMemberCartItem($id_member);
                if (! empty($cartItem)) {
                    $item_total = 0;
                    echo "<a id=\"empty-cart\" href=\"cos.php?action=empty\"><i class=\"fa fa-trash\"></i>Empty Cart</a>";
        ?>
        <table cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align: left;"><strong>Image</strong></th>
                    <th style="text-align: left;"><strong>Name</strong></th>
                    <th style="text-align: left;"><strong>Code</strong></th>
                    <th style="text-align: right;"><strong>Quantity</strong></th>
                    <th style="text-align: right;"><strong>Price</strong></th>
                    <th style="text-align: center;"><strong>Action</strong></th>
                </tr>
                <?php
                    foreach ($cartItem as $item) {
                ?>
                <tr>
                    <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><img src="<?php echo $item["image"]; ?>"/></td>
                    <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
                    <td style="text-align: left; border-bottom: #F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
                    <td style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
                    <td style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
                    <td style="text-align: center; border-bottom: #F0F0F0 1px solid;"><a href="cos.php?action=remove&id=<?php echo
                        $item["id"]; ?>"><i class="fa fa-trash" style="color: black;"></i></a></td>
                </tr>
                <?php
                    $item_total += ($item["price"] * $item["quantity"]);
                    }
                ?>
                <tr>
                    <td colspan="3" align=right><strong>Total:</strong></td>
                    <td align=right><?php echo "$".$item_total; ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <?php
        }
        else {
            echo "<h3>There is nothing in your cart!</h3>";
        }
        ?>
    </section>
    <section class="other-actions">
            <a id="back-to-shop" href="magazin.php">Take me back to the shopping zone</a>
    </section>
    
    <?php //require_once "product-list.php"; ?>
    <script src="script.js"></script>
    </body>
</html>
