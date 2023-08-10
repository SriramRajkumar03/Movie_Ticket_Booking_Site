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
    <title>Booking</title>
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
                if(isset($_GET['ID']))
              {   
                        
                        $movie=$_GET['ID'];
                        $query="SELECT * from movies where mname='$movie'";
                        $result=mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($result);
                        if(mysqli_num_rows($result)>0)
                          { echo'<h4 id="mname" class="bmname" >'.$movie.'</h4>';
                            }
                          }
                        }
    ?>
    <div class="booking">
      <div class="dates">
        <select id="date"></select>
      </div>
      <div class="timing">
        <select id="time">
          <option value="show1">7:00 a.m.</option>
          <option value="show2">10:55 a.m.</option>
          <option value="show3">2:30 p.m.</option>
          <option value="show4">5:25 p.m.</option>
          <option value="show5">8:15 p.m.</option>
          <option value="show6">10:50 p.m.</option>
        </select>
      </div>

      <ul class="showcase">
        <li>
          <div class="seat"></div>
          <small>N/A</small>
        </li>
        <li>
          <div class="seat selected"></div>
          <small>Selected</small>
        </li>
        <li>
          <div class="seat occupied"></div>
          <small>Occupied</small>
        </li>
      </ul>

      <div class="container">
        <div class="screen"></div>

        <div class="row">
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat "></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div><br>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat "></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat "></div>
          <div class="seat "></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat "></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat  occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat "></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat "></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
        </div><br>
        <div class="row">
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat "></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat "></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat occupied"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
      </div>

      <p class="text">
        You have selected <span id="count"></span> seats for the price of Rs.
        <span id="total"></span>
      </p>

      
    </div>
    <button onclick="paymentf()" class="pay">
      Pay now
    </button>
    <footer><div id="footer"></div></footer>
    <script src="script.js"></script>
  </body>
</html>
