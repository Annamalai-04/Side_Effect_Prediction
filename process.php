<?php
$servername = "localhost"; //replace with your MySQL server name
$username = "root"; //replace with your MySQL username
$password = ""; //replace with your MySQL password
$dbname = "mydb"; //replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
// redirect the user to the signup successful page after 3 seconds
  header("refresh:3;url=fixednavbarbychatgpt.html");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
