<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch booking records
$sql = "SELECT id, name, email, phone, address, in_date, out_date, room_type FROM bookings";
$result = $conn->query($sql);

// Check for errors in the SQL query
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking Records</title>
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
            background:rgb(194, 33, 132); 
        }

        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto; /* Scrollable table on small screens */
            }
        }
    </style>
</head>

<body>

    <h2>Booking Records</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Room Type</th>
        </tr>

        <?php
        // Check if rows are available
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Ensure all fields exist in the array
                echo "<tr>
                        <td>" . htmlspecialchars($row['id'] ?? 'N/A') . "</td>
                        <td>" . htmlspecialchars($row['name'] ?? 'N/A') . "</td>
                        <td>" . htmlspecialchars($row['email'] ?? 'N/A') . "</td>
                        <td>" . htmlspecialchars($row['phone'] ?? 'N/A') . "</td>
                        <td>" . htmlspecialchars($row['address'] ?? 'N/A') . "</td>
                        <td>" . htmlspecialchars($row['in_date'] ?? 'N/A') . "</td>
                        <td>" . htmlspecialchars($row['out_date'] ?? 'N/A') . "</td>
                        <td>" . htmlspecialchars($row['room_type'] ?? 'N/A') . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No bookings found.</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
    </table>

    <a href="index.php">Back to Home</a>

</body>

</html>
