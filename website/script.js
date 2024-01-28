
// WHEN USER Clicks on signup button on login page JS
function login() {
    // This is a simple client-side simulation; in a real-world scenario, use server-side authentication.
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const rememberMe = document.getElementById('rememberMe').checked;

    // Perform validation and authentication (simulate success for demonstration)
    if (username && password) {
        alert('Login successful!');

        // Simulate storing user information in localStorage
        const user = { username, rememberMe };
        localStorage.setItem('user', JSON.stringify(user));
    } else {
        alert('Invalid credentials. Please try again.');
    }
}

function signup() {
    alert('Redirect to signup page or implement signup logic.');
    // You can redirect the user to the signup page or implement signup logic here
}

// Check if the user is remembered from a previous session
document.addEventListener('DOMContentLoaded', function () {
    const storedUser = localStorage.getItem('user');

    if (storedUser) {
        const user = JSON.parse(storedUser);
        document.getElementById('username').value = user.username;
        document.getElementById('rememberMe').checked = user.rememberMe;
    }
});


// Function to load content based on the selected page
function loadContent(page) {
    const mainContent = document.getElementById('content');

    // Clear existing content
    mainContent.innerHTML = '';

    // Load content based on the selected page
    switch (page) {
        case 'home':
            // Load home content (existing content)
            break;
        case 'trends':
            // Load Pashmina Trends content
            mainContent.innerHTML = `
                <section id="trends-section">
                    <h2>Pashmina Trends</h2>
                    <!-- Example Image 1 -->
                    <div class="image-container">
                        <img src="./images/trend1.jpg" alt="Trend 1">
                        <div class="image-name">Trend 1</div>
                    </div>
                    <!-- Example Image 2 -->
                    <div class="image-container">
                        <img src="./images/trend2.jpg" alt="Trend 2">
                        <div class="image-name">Trend 2</div>
                    </div>
                    <!-- Add more images as needed -->
                </section>
            `;
            break;
        case 'range':
            // Load Pashmina Range content
            mainContent.innerHTML = `
                <section id="range-section">
                    <h2>Pashmina Range</h2>
                    <!-- Example Image 1 -->
                    <div class="image-container">
                        <img src="./images/range1.jpg" alt="Range 1">
                        <div class="image-name">Range 1</div>
                    </div>
                    <!-- Example Image 2 -->
                    <div class="image-container">
                        <img src="./images/range2.jpg" alt="Range 2">
                        <div class="image-name">Range 2</div>
                    </div>
                    <!-- Add more images as needed -->
                </section>
            `;
            break;
        default:
            // Load default content (home)
            // You can customize this based on your needs
            break;
    }
}

// Initial load (home page)
loadContent('home');


// SCRIPT FOR NEWSLETTER PART
function subscribe() {
    var emailInput = document.getElementById('email');
    var successMessage = document.getElementById('subscribe-success');

    if (validateEmail(emailInput.value)) {
        successMessage.innerText = 'Subscription successful! Thank you for subscribing.';
        emailInput.value = ''; // Clear the input after successful subscription
    } else {
        successMessage.innerText = 'Please enter a valid email address.';
    }
}

function validateEmail(email) {
    // Simple email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// ======================SCRIPT FOR LOCATION NAVIGATION====================================
       // Add an event listener to the "Location" word in the footer
       document.getElementById('show-map').addEventListener('click', function () {
        // Show the map container
        document.getElementById('map-container').style.display = 'block';
    });

    // Add an event listener to the close button in the map container
    document.getElementById('close-map').addEventListener('click', function () {
        // Hide the map container when the close button is clicked
        document.getElementById('map-container').style.display = 'none';
    });


    // ===========================SCRIPT FOR THE ADD TO CART AND WISHLIST TO FUNCTION========================================
    const products = [
        { id: 1, name: 'Pashmina Cap', price: 20.99, image: './images/product1.jpg' },
        { id: 2, name: 'Pashmina Sweater', price: 49.99, image: './images/product2.jpg' },
        { id: 3, name: 'Pashmina Poncho', price: 35.99, image: './images/product3.jpg' },
        { id: 4, name: 'Pashmina Floral Shawl', price: 29.99, image: './images/product4.jpg' },
        { id: 5, name: 'Pashmina-Wool Cap', price: 24.99, image: './images/product5.jpg' },
        { id: 6, name: 'Silk-blend Pashmina Shawl', price: 39.99, image: './images/product6.jpg' },
        { id: 7, name: 'Pashmina Shawl with Laces', price: 45.99, image: './images/product7.jpg' },
        { id: 8, name: 'Pashmina Poncho with Boho Vibes', price: 37.99, image: './images/product8.jpg' },
        { id: 9, name: 'Pashmina Lace Wraps', price: 27.99, image: './images/product9.jpg' },
        { id: 10, name: 'Silk-blend Floral Pashmina Wrap', price: 42.99, image: './images/product10.jpg' },
        { id: 11, name: 'Red Pashmina Shawl', price: 33.99, image: './images/product11.jpg' },
        { id: 12, name: 'Grey Pashmina Shawl', price: 31.99, image: './images/product12.jpg' },
        { id: 13, name: 'Artisanal Pashmina Shawl', price: 55.99, image: './images/product13.jpg' },
        { id: 14, name: 'Nepali Pashmina Shawl', price: 59.99, image: './images/product14.jpg' },
        { id: 15, name: 'Embroidered Pashmina Shawl', price: 49.99, image: './images/product15.jpg' },
        { id: 16, name: 'Pashmina Cardigan Sweater', price: 54.99, image: './images/product16.jpg' },
      ];
      
      // Function to add a product to the cart
      function addToCart(productId) {
        const product = products.find(item => item.id === productId);
        if (product) {
          // Implement logic to add product to the cart (you can use local storage, send a request to the server, etc.)
          console.log(`Added ${product.name} to the cart. Price: $${product.price.toFixed(2)}`);
        } else {
          console.error('Product not found');
        }
      }
      
      // Function to add a product to the wishlist
      function addToWishlist(productId) {
        const product = products.find(item => item.id === productId);
        if (product) {
          // Implement logic to add product to the wishlist (you can use local storage, send a request to the server, etc.)
          console.log(`Added ${product.name} to the wishlist. Price: $${product.price.toFixed(2)}`);
        } else {
          console.error('Product not found');
        }
      }


     