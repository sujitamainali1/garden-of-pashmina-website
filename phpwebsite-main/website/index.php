<?php
// Include the product functions
include 'controllers/products_functions.php';
include_once 'config/database.php';
global $connection;
// Fetch all products
$products = getAllProducts($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Garden of Pashmina</title>
</head>
<body>

    <header>
        <div id="logo">
            <img src="./images/logo.JPG" alt="Garden of Pashmina Logo">
        </div>
        <div id="title">
            <h1>Garden of Pashmina</h1>
        </div>
        <div id="navbar">
            <ul>
                <button onclick="location.href='index.php'">Home</button>
                <button onclick="location.href='about.html'">About</button>
                <button onclick="location.href='template/products.php'">Products</button>
                <button onclick="location.href='template/adminlogin.php'">Admin</button>
            </ul>
        </div>
        <div id="user-actions">
            <!-- Replace text with icons using Unicode characters -->
            <button onclick="location.href='template/login.php'">&#128100;</button> <!-- User icon -->
            <button onclick="location.href='template/signup.php'">&#128101;</button> <!-- User plus icon -->
            <button onclick="location.href='template/allcartlist.php'">&#128722;</button> <!-- Shopping cart icon -->
            <button onclick="showWishlist()">&#10084;</button> <!-- Heart icon for wishlist -->
            <input type="text" id="search" placeholder="Search">
            <button onclick="search()">&#128269;</button> <!-- Search icon -->
        </div>
    </header>

    <main id="home">
        <!-- Home content as before -->
        <div class="dual-image-container">
            <div class="inclined-image-container">
                <img src="./images/home.jpg" alt="Home Image 1" class="inclined-image">
            </div>
            <div class="inclined-image-container">
                <img src="./images/home1 (2).jpg" alt="Home Image 2" class="inclined-image">
            </div>
            <div class="text-container">
                <h2> <pre>Welcome to 
         "Garden of Pashmina"</pre></h2>
                <pre>Discover the finest collection of Pashmina products.</pre>
            </div>

    </main>

     <!-- ============================PASHMINA TRENDS==================================== -->
     
    <section id="product-section">
        <h2>All Products</h2>
       
        <div class="product-grid">
        <?php foreach ($products as $product): ?>
            <!-- Product 1 -->
            <div class="product">
                <img src="./images/product1.jpg" alt="Product 1">
                <h3><?php echo $product["name"]; ?></h3>
                <p><?php echo $product["price"]; ?></p>
                <form method="post" action="controllers/add_to_cart_controller.php">
                    <input type="hidden" name="product_id" value="<?php echo $product["id"]; ?>">
                    <input type="submit" name="add_to_cart" value="Add to Cart">
                </form>
            </div>
            <?php endforeach; ?>
        </div>
        
    </section>
    

    <!-- =============================Newsletter Section================================= -->

<section id="newsletter-section" class="container">
    <h2 class="center">Subscribe to Our Newsletter</h2>
    <p class="center">Stay updated with the latest trends and promotions.</p>
    <form id="newsletterForm" class="center">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <button type="button" onclick="subscribeNewsletter()">Subscribe</button>
    </form>
</section>

<!--==================================== Footer Section ====================================== -->
<footer class="footer">
    <div class="container footer__container">
        <div class="footer__col">
            <div class="footer__title">Garden of Pashmina</div>
            <p class="footer__description">
                Discover the finest collection of Pashmina products at the Garden of Pashmina.
            </p>
        </div>

        <div class="footer__col">
            <div class="footer__title">Contact Us</div>
            <div class="footer__info">
                <p>Location: <a href="location.html" target="_blank">Tridevi Marg, Thamel</a></p>
                <p>Email: gardenofpashmina@email.com</p>
                <p>Contact: +977 9843088386</p>
            </div>
        </div>

        <div class="footer__col">
            <div class="footer__title">Our Links</div>
            <ul class="footer__links">
                <li class="footer__link"><a href="about.html" target="blank">About Us</a></li>
                <li class="footer__link"><a href="privacy_policy.html" target="blank">Privacy and Policy</a></li>
                <li class="footer__link"><a href="terms_conditions.html" target="blank">Terms and Condition</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <div class="footer__title">Social Media</div>
            <div class="footer__social-media">
                <a href="https://www.instagram.com/gardenofpashmina/" target="_blank"><img src="./images/instalogo.jpg" alt="Instagram"></a>
                <a href="https://wa.me/1234567890" target="_blank"><img src="./images/whatsapp.png" alt="WhatsApp"></a>
            </div>
        </div>

        <div class="footer__col">
            <div class="footer__title">Payment Methods</div>
            <!-- Add your payment method icons or information here -->
        </div>
    </div>

    <div class="footer__copyRight">
        <p>&copy; 2023 <span>Sujita Mainali</span> All Rights Reserved</p>
    </div>
</footer>

    <div id="login-modal"></div>
    <div id="signup-modal"></div>
    <div id="cart-modal"></div>

    <script src="script.js"></script>
</body>
</html>
