// JS [WHEN THE ADD TO CART BUTTON IS CLICKED SHOWS A SIGN UP PLEASE MESSAGE]


// Check if the page has fully loaded
document.addEventListener("DOMContentLoaded", function () {
    // Simulated user authentication status
    let isLoggedIn = false;

    // Function to add product to cart
    function addToCart(productId) {
        if (isLoggedIn) {
            // User is signed in, add the product to the cart
            const product = document.getElementById(productId);
            const productName = product.querySelector('h2').innerText;
            const productPrice = product.querySelector('span').innerText;

            // Simulate adding to the cart (store in localStorage for simplicity)
            const cartItem = { name: productName, price: productPrice };
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(cartItem);
            localStorage.setItem('cart', JSON.stringify(cart));

            alert('Product added to your cart!');
        } else {
            // User is not signed in, prompt them to sign in
            alert('Please sign in to add products to your cart.');
            // You can redirect the user to a sign-in page in a real application
        }
    }

    // Example: Load cart items from localStorage on page load
    function loadCartItems() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        console.log('Cart Items:', cart);
        // You can use this data to display the user's cart on the page
    }

    // Example: Clear cart items from localStorage
    function clearCart() {
        localStorage.removeItem('cart');
        console.log('Cart cleared.');
    }

    // Call the loadCartItems function on page load
    loadCartItems();

    // Attach the addToCart function to the "Add to Cart" button click event
    document.querySelectorAll('.product button').forEach(button => {
        button.addEventListener('click', function () {
            const productId = this.parentNode.id;
            addToCart(productId);
        });
    });
});


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
