<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fishing store website</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
    
<?php
        
    require_once"queryDb.php";
    $products = getProducts();

?>

<body>

    <!----header--->
    <header>
        <a href="#" class="logo">Tom's Fishing Store</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.html">About</a></li>      
            <li><a href="contact.html">Contact</a></li>
        </ul>

        <div class="icons">
            <a href="#"><i class="bx bx-search"></i></a>
            <a href="#"><i class="bx bxs-user-circle"></i></a>
            <a href="#"><i class="bx bxs-shopping-bag"></i></a>

        </div>

    </header>

    <!----shop--->
    <div class="shop" id="sect">

        <div class="container">

            <?php
                foreach ($products as $product){
                    $name = $product['product_name'];
                    $price = $product['product_price'];
                    $productval = strval($product['product_id']);
                    $image = "Images/" . "rod" . $productval . ".jpg";
                    echo "<div class='box'>";                    
                    echo "<image src=" . $image . ">";
                    echo "<h4>".$name."</h4>";
                    echo "<h5>$".$price."</h5>";
                    echo '<div class="cart">';
                    echo '<a href="#"><i class="bx bx-cart"></i></a>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
       
        </div>
    </div>

    <!----footer--->
    <div class="footer" id="sect">
        <div class="footer-main">
            <div class="footer-content">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>      
                <li><a href="contact.html">Contact</a></li>
            </div>

            <div class="footer-content">
                <li><a href="#">Shipping & returns</a></li>
                <li><a href="#">Store Policy</a></li>
                <li><a href="#">Payment methods</a></li>      
            </div>

            <div class="footer-content">
                <li><a href="#">Contact</a></li>
                <li><a href="#">PO: 123-456-7890</a></li>
            </div>

            <div class="footer-content">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Pinterest</a></li>
            </div>
        </div>

        <div class="action">
            <form>
                <input type="email" name="email" placeholder="Your email" required>
                <input type="submit" name="submit" value="Submit" required>
            </form>
        </div>

    </div>
    
   
    
</body>

</html>