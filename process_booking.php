<?php
$servername = "localhost"; // Change if your MySQL host is different
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "booking_db"; // Ensure the database name matches

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $in_date = $_POST['in_date'];
    $out_date = $_POST['out_date'];
    $room_type = $_POST['room_type'];

    // Use prepared statements for security
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, address, in_date, out_date, room_type) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $address, $in_date, $out_date, $room_type);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Booking successful!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>



<?php
// Redirect to index.php if the page is refreshed
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header("Location: index.php");
    exit();
}
?>