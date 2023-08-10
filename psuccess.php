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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
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

    <div class="ph3"><h3>Payment successful!</h3></div>
    <div class="payp">
      <p>
        Thank you for booking with us. Hope you have a great movie watching
        experience!
      </p>
      <h4>Ticket:</h4>
    </div>
    <?php
      if(isset($_SESSION['username']))
      {   

                        $query="SELECT *
                        FROM booking
                        ORDER BY bid DESC
                        LIMIT 0,1";
                        $result=mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($result);
                        echo'<div class="payh4" style="margin-bottom: 2rem;">
                        <h4 >'.$row['movie'].'</h4>
                        <span><h4>No. of seats&nbsp:&nbsp'.$row['seats'].' </h4></span>
                        <h4 >Date&nbsp:&nbsp'.$row['showdate'].'</h4>
                        <span><h4>Time&nbsp:&nbsp'.$row['showtime'].'</h4></span>
                        <h4 class="totalh4">Total&nbsp:&nbspRs.&nbsp'.$row['price'].'</h4>
                        </div>';
                          }
    ?>
    <footer><div id="footer"></div></footer>
  </body>
</html>
