<?php
// Start a session to store user data
session_start();

// Check if the login form has been submitted
if (isset($_POST['login'])) {
  // Retrieve the email and password from the login form
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connect to the database
  $conn = mysqli_connect("localhost", "root", "", "mydb");

  // Check if the connection was successful
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Query the database to find the user with the given email and password
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  // Check if a user was found
  if (mysqli_num_rows($result) == 1) {
    // Store the user data in the session
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $user;

    // Redirect the user to the profile page
    header("Location: fixednavbarbychatgpt.html");
    exit;
  } else {
    // Show an error message if the login was unsuccessful
    $error = "Invalid email or password.";
  }

  // Close the database connection
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>

  <style>
       body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        background-image: url('1.jpg');
        background-size: cover;
        align-content: center;
      }
      form {
        background-color: #fff;
        left: 75%;
        padding: 40px;
        max-width: 400px;
        margin: 20 auto;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h1 {
        
        margin-bottom: 20px;
      }

      input[type="email"],
      input[type="password"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
  </style>
</head>
<body>
  <h1>Login</h1>
  <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Email:</label>
    <input type="email" name="email" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <input type="submit" name="login"><br>
  </form>
</body>
</html>
