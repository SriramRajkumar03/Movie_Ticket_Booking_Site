<!DOCTYPE html>
<html lang="en">
<?php 

include 'connection.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	if ($result->num_rows > 0) {
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
    <script src="scripts/script.js" defer></script>
    <title>Login</title>
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
    <div class="signup"><h3>Login</h3></div>
	<div class="form">
		<form method="POST">

				<input
				type="email"
				name="email"
				id="email"
				placeholder="Email"
				value="<?php echo $email; ?>"
				required
				/><br /><br />

				<input
				type="password"
				name="password"
				value="<?php echo $_POST['password']; ?>"
				placeholder="Password"
				id="password"
				required
				/><br /><br />
				<input
				type="checkbox"
				name="remember"
				value="1"
				/><p class="rememberme">&nbsp&nbspRemember Me</p><br /><br />
				<button name="submit">Login</button>
			<p class="logintxt">Don't have an account? <a href="signup.php" class="regh">Register Here</a></p>
		</form>
	</div>
	</div>
	<?php
		if (isset($_POST['submit'])) {
			if($email == $row['email']){
				if(isset($_POST['remember'])){
					setcookie('email',$email,time()+86400*7);
				}
			}
		}
		if(isset($_COOKIE['email'])){
			$email=$_COOKIE['email'];
			echo "<script>
				document.getElementById('email').value='$email';
				</script>";
		}
	?>
    <footer><div id="footer"></div></footer>
  </body>
</html>
