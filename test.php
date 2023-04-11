<?php
		// database connection
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// insert data into database when form is submitted
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$pass = $_POST['password'];
			// check if email already exists in database
			$sql_check = "SELECT email FROM users WHERE email='$email'";
			$result_check = mysqli_query($conn, $sql_check);
			
			if (mysqli_num_rows($result_check) == 0) { // email does not exist in database
				$sql_insert = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";
				
				if (mysqli_query($conn, $sql_insert)) {
					echo "<br><br><br><br><p>Thank you for signing up!</p>";
				} else {
					echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
				}
			} else { // email already exists in database
				echo "<br><br><br><br><p>Email already exists in database.</p>";
			}
		}

		// display data from database when submit button is clicked
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$sql = "SELECT name, email FROM users WHERE email='$email'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<p>Name: " . $row['name'] . "<br>Email: " . $row['email'] . "</p>";
				}
			} else {
				echo "<p>No data found.</p>";
			}
		}

		mysqli_close($conn);
		
	?>
	<!DOCTYPE html>
<html>
  <head>
    <title>My Home Page</title>
    <style>
      /* Add some basic styles to the page */
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
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
     <script>
function redirectToPage() {
  window.location.href = "login.php"; // replace with the URL of your HTML page
}
</script>
  </head>
  <body>

 <br>
  <br>
  <br>
  <br>
  <br>
 <b> Back to ==></b> <button onclick="redirectToPage()">Login</button>
 </body>
</html>