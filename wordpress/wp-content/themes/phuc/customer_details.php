<?php
// Get data
$customer_name = $_POST["customer_name"];
$customer_email = $_POST["customer_email"];
$customer_msg = $_POST["customer_msg"];

// Database connection
$conn = new mysqli("localhost","root","", "phuc");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Data insertion into database
$query = "INSERT INTO wp_customcontactform ('customer_name', 'customer_email', 'customer_msg') 
VALUES ($customer_name, $customer_email, $customer_msg)";
if ($conn->$query($sql) === TRUE) {
	echo "<p>New message was sent to the DB!</p>";
} else {
	echo "Error: " . $query . "<br>" . $conn->error;
};


$conn->close();
 
?>