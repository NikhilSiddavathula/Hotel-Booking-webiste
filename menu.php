<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
        }

        h1{
            text-align: center;
            color: #2c3e50;
        }

        .menu-section {
            margin-bottom: 40px;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 12px;
            margin-bottom: 10px;
            background: #fff;
        }

        .menu-item span {
            font-weight: bold;
        }

        button {
            padding: 8px 15px;
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #34495e;
        }

        .cart {
            margin-top: 20px;
            padding: 15px;
            background: #e8e8e8;
            border-radius: 10px;
        }

        .cart-items {
            list-style: none;
            padding: 0;
        }

        .cart-items li {
            margin: 5px 0;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Hotel Menu</h1>

        <!-- Breakfast Section -->
        <div class="menu-section">
            <h3>🍽️ Breakfast</h3>
            <div class="menu-item"><span>Idli & Sambar - ₹50</span><button onclick="addToCart('Idli & Sambar', 50)">Add
                    to Cart</button></div>
            <div class="menu-item"><span>Poori & Bhaji - ₹60</span><button onclick="addToCart('Poori & Bhaji', 60)">Add
                    to Cart</button></div>
            <div class="menu-item"><span>Dosa & Chutney - ₹70</span><button
                    onclick="addToCart('Dosa & Chutney', 70)">Add to Cart</button></div>
        </div>

        <!-- Lunch Section -->
        <div class="menu-section">
            <h3>🍛 Lunch</h3>
            <div class="menu-item"><span>Veg Thali - ₹120</span><button onclick="addToCart('Veg Thali', 120)">Add to
                    Cart</button></div>
            <div class="menu-item"><span>Chicken Biryani - ₹180</span><button
                    onclick="addToCart('Chicken Biryani', 180)">Add to Cart</button></div>
            <div class="menu-item"><span>Paneer Tikka - ₹150</span><button onclick="addToCart('Paneer Tikka', 150)">Add
                    to Cart</button></div>
        </div>

        <!-- Dinner Section -->
        <div class="menu-section">
            <h3>🍲 Dinner</h3>
            <div class="menu-item"><span>Paneer Butter Masala & Naan - ₹150</span><button
                    onclick="addToCart('Paneer Butter Masala & Naan', 150)">Add to Cart</button></div>
            <div class="menu-item"><span>Fish Curry & Rice - ₹200</span><button
                    onclick="addToCart('Fish Curry & Rice', 200)">Add to Cart</button></div>
            <div class="menu-item"><span>Chicken Curry & Roti - ₹170</span><button
                    onclick="addToCart('Chicken Curry & Roti', 170)">Add to Cart</button></div>
        </div>

        <!-- Drinks Section -->
        <div class="menu-section">
            <h3>🥤 Drinks</h3>
            <div class="menu-item"><span>Masala Chai - ₹30</span><button onclick="addToCart('Masala Chai', 30)">Add to
                    Cart</button></div>
            <div class="menu-item"><span>Mango Lassi - ₹50</span><button onclick="addToCart('Mango Lassi', 50)">Add to
                    Cart</button></div>
            <div class="menu-item"><span>Cold Coffee - ₹80</span><button onclick="addToCart('Cold Coffee', 80)">Add to
                    Cart</button></div>
        </div>

        <!-- Ice Creams Section -->
        <div class="menu-section">
            <h3>🍨 Ice Creams</h3>
            <div class="menu-item"><span>Vanilla Ice Cream - ₹60</span><button
                    onclick="addToCart('Vanilla Ice Cream', 60)">Add to Cart</button></div>
            <div class="menu-item"><span>Chocolate Ice Cream - ₹70</span><button
                    onclick="addToCart('Chocolate Ice Cream', 70)">Add to Cart</button></div>
            <div class="menu-item"><span>Strawberry Ice Cream - ₹65</span><button
                    onclick="addToCart('Strawberry Ice Cream', 65)">Add to Cart</button></div>
        </div>

        <!-- Cart Section -->
        <div class="cart">
            <h3>🛒 Your Cart</h3>
            <ul class="cart-items"></ul>
            <p><strong>Total: ₹<span id="total">0</span></strong></p>
            <form action="process_order.php" method="post">
                <label>Room Number:</label>
                <input type="text" name="room_number" required>
                <input type="hidden" name="cart_items" id="cartData">
                <button type="submit">Book Order</button>
            </form>
        </div>
    </div>

    <script>
        let cart = [];

        function addToCart(item, price) {
            cart.push({ item, price });
            updateCart();
        }

        function updateCart() {
            let cartList = document.querySelector(".cart-items");
            let totalAmount = 0;
            cartList.innerHTML = "";
            cart.forEach((entry) => {
                totalAmount += entry.price;
                let listItem = document.createElement("li");
                listItem.textContent = `${entry.item} - ₹${entry.price}`;
                cartList.appendChild(listItem);
            });
            document.getElementById("total").textContent = totalAmount;
            document.getElementById("cartData").value = JSON.stringify(cart);
        }
    </script>

</body>

</html>