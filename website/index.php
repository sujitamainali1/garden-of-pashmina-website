
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
            <button onclick="showCart()">&#128722;</button> <!-- Shopping cart icon -->
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
     <section id="trends-section">
        <h2>Pashmina Trends</h2>

        <!-- Trend 1 -->
        <div class="image-container">
            <img src="./images/trend1.jpg" alt="Trend 1">
            <div class="image-name">Hijab Pashmina</div>
        </div>

        <!-- Trend 2-->
        <div class="image-container">
            <img src="./images/trend2.jpg" alt="Trend 2">
            <div class="image-name">Rainbow Coloured Pashmina</div>
        </div>

        <!-- Trend 3 -->
        <div class="image-container">
            <img src="./images/trend3.webp" alt="Trend 3">
            <div class="image-name">Trendy Poncho</div>
        </div>

        <!-- Trend 4 -->
        <div class="image-container">
            <img src="./images/trend4.jpg" alt="Trend 4">
            <div class="image-name">Turtle-neck Pashmina Sweater</div>
        </div>

        <!-- Trend 5 -->
        <div class="image-container">
            <img src="./images/trend5.webp" alt="Trend 5">
            <div class="image-name">Pashmina Cap</div>
        </div>

        <!-- Trend 6 -->
        <div class="image-container">
            <img src="./images/trend6.png" alt="Trend 6">
            <div class="image-name">Pashmina Bucket Hat </div>
        </div>

    </section>

    <!-- Pashmina Range Section -->
    <section id="range-section">
        <h2>Pashmina Range</h2>

        <!-- Range 1 -->
        <div class="image-container">
            <img src="./images/range1.jpg" alt="Range 1">
            <div class="image-name">100% Pure Pashmina</div>
        </div>

        <!-- Range 2  -->
        <div class="image-container">
            <img src="./images/range2.webp" alt="Range 2">
            <div class="image-name">Cotton-blend Pashmina</div>
        </div>

        <!-- Range 3  -->
        <div class="image-container">
            <img src="./images/range3.webp" alt="Range 3">
            <div class="image-name">Silk-blend Pashmina</div>
        </div>

         <!-- Range 4  -->
         <div class="image-container">
            <img src="./images/range4.webp" alt="Range 4">
            <div class="image-name">Wool-blend Pashmina</div>
        </div>

    </section>

    <section id="product-section">
        <h2>All Products</h2>
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product">
                <img src="./images/product1.jpg" alt="Product 1">
                <h3>Pashmina Cap</h3>
                <p>Price: $20.99</p>
                <button onclick="addToCart(1)">&#128722;</button>
                <button onclick="addToWishlist(1)">&#10084;</button>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <img src="./images/product2.jpg" alt="Product 2">
                <h3>Pashmina Sweater</h3>
                <p>Price: $49.99</p>
                <button onclick="addToCart(2)">&#128722;</button>
                <button onclick="addToWishlist(2)">&#10084;</button>
            </div>

            <!-- Product 3 -->
            <div class="product">
                <img src="./images/product3.jpg" alt="Product 3">
                <h3>Pashmina Poncho</h3>
                <p>Price: $39.99</p>
                <button onclick="addToCart(3)">&#128722;</button>
                <button onclick="addToWishlist(3)">&#10084;</button>
            </div>

            <!-- Product 4 -->
            <div class="product">
                <img src="./images/product4.jpg" alt="Product 4">
                <h3>Pashmina Floral Shawl</h3>
                <p>Price: $35.99</p>
                <button onclick="addToCart(4)">&#128722;</button>
                <button onclick="addToWishlist(4)">&#10084;</button>
            </div>

            <!-- Product 5 -->
            <div class="product">
                <img src="./images/product5.jpg" alt="Product 5">
                <h3>Pashmina-Wool Cap</h3>
                <p>Price: $24.99</p>
                <button onclick="addToCart(5)">&#128722;</button>
                <button onclick="addToWishlist(5)">&#10084;</button>
            </div>

            <!-- Product 6-->
            <div class="product">
                <img src="./images/product6.jpg" alt="Product 6">
                <h3>Silk-blend Pashmina Shawl</h3>
                <p>Price: $40.99</p>
                <button onclick="addToCart(6)">&#128722;</button>
                <button onclick="addToWishlist(6)">&#10084;</button>
            </div>

            <!-- Product 7 -->
            <div class="product">
                <img src="./images/product7.jpg" alt="Product 7">
                <h3>Pashmina Shawl with Laces</h3>
                <p>Price: $38.99</p>
                <button onclick="addToCart(7)">&#128722;</button>
                <button onclick="addToWishlist(7)">&#10084;</button>
            </div>

            <!-- Product 8 -->
            <div class="product">
                <img src="./images/product8.jpg" alt="Product 8">
                <h3>Pashmina Poncho with Boho Vibes</h3>
                <p>Price: $19.99</p>
                <button onclick="addToCart(8)">&#128722;</button>
                <button onclick="addToWishlist(8)">&#10084;</button>
            </div>

            <!-- Product 9 -->
            <div class="product">
                <img src="./images/product9.jpg" alt="Product 9">
                <h3>Pashmina Lace Wraps</h3>
                <p>Price: $9.99</p>
                <button onclick="addToCart(9)">&#128722;</button>
                <button onclick="addToWishlist(9)">&#10084;</button>
            </div>

            <!-- Product 10 -->
            <div class="product">
                <img src="./images/product10.jpg" alt="Product 10">
                <h3>Silk-blend Floral Pashmina Wrap</h3>
                <p>Price: $10.99</p>
                <button onclick="addToCart(10)">&#128722;</button>
                <button onclick="addToWishlist(10)">&#10084;</button>
            </div>

            <!-- Product 11 -->
            <div class="product">
                <img src="./images/product11.jpg" alt="Product 11">
                <h3>Red Pashmina Shawl</h3>
                <p>Price: $35.99</p>
                <button onclick="addToCart(11)">&#128722;</button>
                <button onclick="addToWishlist(11)">&#10084;</button>
            </div>

            <!-- Product 12 -->
            <div class="product">
                <img src="./images/product12.jpg" alt="Product 12">
                <h3>Grey Pashmina Shawl</h3>
                <p>Price: $10.99</p>
                <button onclick="addToCart(12)">&#128722;</button>
                <button onclick="addToWishlist(12)">&#10084;</button>
            </div>

            <!-- Product 13  -->
            <div class="product">
                <img src="./images/product13.jpg" alt="Product 13">
                <h3>Artisanal Pashmina Shawl</h3>
                <p>Price: $45.99</p>
                <button onclick="addToCart(13)">&#128722;</button>
                <button onclick="addToWishlist(13)">&#10084;</button>
            </div>

            <!-- Product 14 -->
            <div class="product">
                <img src="./images/product14.jpg" alt="Product 14">
                <h3>Nepali Pashmina Shawl</h3>
                <p>Price: $49.99</p>
                <button onclick="addToCart(14)">&#128722;</button>
                <button onclick="addToWishlist(14)">&#10084;</button>
            </div>

            <!-- Product 15 -->
            <div class="product">
                <img src="./images/product15.jpg" alt="Product 15">
                <h3>Embroidered Pashmina Shawl</h3>
                <p>Price: $44.99</p>
                <button onclick="addToCart(15)">&#128722;</button>
                <button onclick="addToWishlist(15)">&#10084;</button>
            </div>

            <!-- Product 16 -->
            <div class="product">
                <img src="./images/product16.jpg" alt="Product 16">
                <h3>Pashmina Cardigan Sweater </h3>
                <p>Price: $29.99</p> 
                <button onclick="addToCart(16)">&#128722;</button>
                <button onclick="addToWishlist(16)">&#10084;</button>
            </div>
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
