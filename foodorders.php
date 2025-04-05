<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "orders_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and group booking records by room_number
$sql = "SELECT room_number, 
               GROUP_CONCAT(item SEPARATOR ', ') AS items,
               GROUP_CONCAT(price SEPARATOR ', ') AS prices,
               GROUP_CONCAT(order_time SEPARATOR ', ') AS order_times,
               SUM(price) AS total_price
        FROM orders
        GROUP BY room_number";
$result = $conn->query($sql);

// Check for errors in the SQL query
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Orders</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f9f9f9;
            line-height: 1.6;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background:rgb(190, 60, 141);
            color: white;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background:rgb(190, 60, 141);
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }

        a:hover {
            background:rgb(207, 30, 139);
        }

        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>

    <h2>Booking Records</h2>

    <table>
        <tr>
            <th>Room Number</th>
            <th>Items</th>
            <th>Prices</th>
            <th>Order Times</th>
            <th>Total Price</th>
        </tr>

        <?php
        // Check if rows are available
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['room_number']) . "</td>
                        <td>" . htmlspecialchars($row['items']) . "</td>
                        <td>" . htmlspecialchars($row['prices']) . "</td>
                        <td>" . htmlspecialchars($row['order_times']) . "</td>
                        <td>" . htmlspecialchars($row['total_price']) . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No orders found.</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
    </table>

    <a href="index.php">Back to Home</a>

</body>

</html>
