<!DOCTYPE html>
<html lang="en">
<?php 

include 'connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
  $phno = $_POST['phno'];
	$password = md5($_POST['password']);
	$pswd2 = md5($_POST['pswd2']);
  

	if ($password == $pswd2) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password, phno)
					VALUES ('$username', '$email', '$password', '$phno')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Successfully registered!')</script>";
				$username = "";
				$email = "";
        $phno="";
				$_POST['password'] = "";
				$_POST['pswd2'] = "";
			} else {
				echo "<script>alert('Something went wrong.')</script>";
			}
		} else {
			echo "<script>alert('Email already exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Passwords do not match.')</script>";
	}
}

?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="scripts/script.js" defer></script>
    <title>Sign Up</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
      $(function () {
        $("#header").load("headerandfooter/header.php");
        $("#footer").load("headerandfooter/footer.php");
      });
    </script>
  </head>
  <body>
    <header><div id="header"></div></header>

    <div class="signup"><h3>Sign Up</h3></div>
    <div class="form">
      <form onsubmit="return validateForm()"  id="form1" method="POST">
        <input
          type="text"
          name="nam"
          id="nam"
          placeholder="Name"
          required
        /><br /><br />
        <input
          type="text"
          name="username"
          id="unam"
          placeholder="Username"
          value="<?php echo $username; ?>"
        /><br /><br />
        <input
          type="password"
          name="password"
          id="pswd1"
          placeholder="Password"
          value="<?php echo $_POST['password']; ?>"
        /><br /><br />
        <input
          type="password"
          name="pswd2"
          id="pswd2"
          placeholder="Confirm Password"
          value="<?php echo $_POST['pswd2']; ?>"
        /><br /><br />
        <input
          type="email"
          name="email"
          id="ema"
          placeholder="Email"
          value="<?php echo $email; ?>"
          required
        /><br /><br />
        <input
          type="tel"
          id="phone"
          name="phno"
          placeholder="10-digit Ph. Number"
          value="<?php echo $_POST['phno']; ?>"
          pattern="[0-9]{10}"
          required
        /><br /><br />
        <button type="submit" name="submit">Sign Up</button>
      </form>
    </div>
    <footer><div id="footer"></div></footer>
  </body>
</html>
