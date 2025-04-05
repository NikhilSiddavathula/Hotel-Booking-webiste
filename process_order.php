<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "orders_db";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process order
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_number = $_POST['room_number'];
    $cart_items = json_decode($_POST['cart_items'], true);
    $order_time = date("Y-m-d H:i:s");

    if (!empty($cart_items)) {
        foreach ($cart_items as $item) {
            $stmt = $conn->prepare("INSERT INTO orders (room_number, item, price, order_time) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $room_number, $item['item'], $item['price'], $order_time);
            $stmt->execute();
        }
        echo "<script>alert('Order placed successfully!'); window.location='menu.php';</script>";
    } else {
        echo "<script>alert('Cart is empty!'); window.location='menu.php';</script>";
    }
}

// Close connection
$conn->close();
?>