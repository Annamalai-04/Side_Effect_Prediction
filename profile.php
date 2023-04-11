<?php
// Start a session to retrieve user data
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
      include 'fixednavbarbychatgpt.html';
  // Redirect the user to the login page
  header("Location: process.php");
  exit;

}
if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
  // user is signed up, display welcome message or redirect to appropriate page
  echo "Welcome, " . $_SESSION['name'] . "!";
   header("Location: process.php");
   exit;
}
// Retrieve the user's name and email from the session
$name = $_SESSION['user']['name'];
$email = $_SESSION['user']['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile Page</title>
  <style >
       body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
      }
      /* Style the navigation bar */
      .navbar {
        background-color: #333;
        overflow: hidden;
        position: fixed;
        top: 0;
        width: 100%;
      }
      /* Style the links inside the navigation bar */
      .navbar a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }
      /* Change the color of links on hover */
      .navbar a:hover {
        background-color: #ddd;
        color: black;
      }
      /* Add an active class to highlight the current page */
      .active {
        background-color: #4CAF50;
        color: white;
      }
      /* Add some padding to the page content to prevent overlapping with the navbar */
      .content {
        padding-top: 70px;
      }
       form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 150px;
    }

    /* Style the input fields */
    label {
      font-size: 20px;
      margin-bottom: 10px;
    }
    input[type="text"] {
      font-size: 18px;
      padding: 5px;
      border: 2px solid #ccc;
      border-radius: 5px;
      width: 300px;
      margin-bottom: 20px;
    }

    /* Style the button */
    button {
      font-size: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #3e8e41;
    }
  </style>
 
</head>
<body>
     <nav class="navbar">
  
    <a href="fixednavbarbychatgpt.html" >Home</a>
    <a href="history.html">History</a>
    <a class="active" href="profile.php">Profile</a>
    <a href="contacts.html">About</a>
  
</nav>
<br>
<br>
<br>
<br>
<br>
  <h1>Welcome <?php echo $name; ?>!</h1>
  <p>Your email address is: <?php echo $email; ?></p>

</body>
</html>
