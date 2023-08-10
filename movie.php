<?php
       session_start();
       include "connection.php";
    $sql = "SELECT * FROM movies";
    $title=$_GET['ID'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="scripts/script.js" defer></script>
    <title><?php echo"$title"; ?></title>
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

    <main id="main">
      

      <?php
    
    $MID=$_GET['ID'];
    $query = "SELECT * FROM movies WHERE mname='$MID'";
    $result = mysqli_query ($con,$query)or die(mysql_error());

        if(mysqli_num_rows($result) > 0) 
        {   
            while($row = mysqli_fetch_assoc($result)) 
            {
            $target="booking.php?ID=".$MID."&";
echo '
<div class="moviepage">
        <img src="' . $row['mimg'] . '" alt="Poster" />
      </div>
      <div class="trailer">
        <iframe
          width="560"
          height="315"
          src="' . $row['trailer'] . '"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
<div class="name">
<h3>' . $row['mname'] . '</h3>
</div>
<div class="details">
<div class="heading">
  <h4>Synopsis</h4>
</div>
<p>
' . $row['synopsis'] . '
</p>

<div class="heading">
  <h4>Cast and Crew</h4>
</div>
<p>
  Director: ' . $row['director'] . '<br />
  Writers: ' . $row['writer'] . '<br />
  Cast: ' . $row['cast'] . '<br />
</p>

<div class="rating">
  <h4>IMDb : ' . $row['rating'] . '</h4>
</div>
</div>
</main>
<a  href="'.$target.'" class="bookbtn" id="bookbtn" >Book now<br> </a>';
            }
        }
?>
    
    <footer><div id="footer"></div></footer>
  </body>
</html>
