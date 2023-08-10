<!DOCTYPE html>
<html lang="en">
<?php 

include 'connection.php';

session_start();

error_reporting(0);

if (!isset($_SESSION['username'])) {
header('Location: login.php');
}
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>"/>
    <script src="scripts/script.js" defer></script>
    <title>Payment</title>
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

    <?php
      if(isset($_SESSION['username']))
      {   
                if((isset($_GET['NOS']))&&(isset($_GET['TOT'])))
              {   
                        
                        $seats=$_GET['NOS'];
                        $price=$_GET['TOT'];
                        $mname=$_GET['ID'];
                        $dt=$_GET['DT'];
                        $tm=$_GET['TM'];
                        $query="SELECT * from booking";
                        $result=mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($result);

                        echo'<div class="payh4">
                        <h4 >'.$mname.'</h4>
                        <span><h4>No. of seats&nbsp:&nbsp'.$seats.' </h4></span>
                        <h4 >Date&nbsp:&nbsp'.$dt.'</h4>
                        <span><h4>Time&nbsp:&nbsp'.$tm.'</h4></span>
                        <h4 class="totalh4">Total&nbsp:&nbspRs.&nbsp'.$price.'</h4>
                        </div>';

                          }
                        }
    ?>

    <div class="signup"><h3>Payment</h3></div>
    <div class="form">
      <form action="psuccess.php" id="form2" method="POST">

        <input
          type="text"
          name="nam"
          id="nam"
          placeholder="Name"
          required
        /><br /><br />
        <input
          type="text"
          name="ccn"
          id="ccn"
          placeholder="16-digit Credit Card no."
          pattern="[0-9]{16}"
          autocomplete="off"
          required
        /><br /><br />
        <input
          type="text"
          name="cvv"
          id="cvv"
          placeholder="CVV"
          pattern="[0-9]{3}"
          autocomplete="off"
          required
        /><br /><br />
        <input type="text" id="expmonth" name="expmonth" placeholder="Expiry Month" pattern="[0-9]{2}">
        <br /><br />
        <input type="text" id="expyear" name="expyear" placeholder="Expiry Year" pattern="[0-9]{4}">
        <br /><br />
        <button type="submit" name="submit" value="submit">Pay now</button>
      </form>
      </div>
      <?php
      $username=$_SESSION['username'];
      $date = date('Y-m-d H:i:s');
          $insert_query = "INSERT INTO booking (username,movie,seats,price,datet,showdate,showtime)
                          VALUES ('$username','$mname','$seats', '$price', '$date','$dt','$tm')";
          $add = mysqli_query($con, $insert_query);
      ?>
      <!--<div class="demo">
        <p>
          <small
            >*This form does not save your details, for security reasons.</small
          >
        </p>
      </div>-->
   
    <footer><div id="footer"></div></footer>
  </body>
</html>
