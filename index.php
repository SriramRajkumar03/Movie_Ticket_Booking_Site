<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="scripts/script.js" defer></script>
    <title>Kinofist Cinema</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
      $(function () {
        $("#header").load("headerandfooter/header.php");
        $("#footer").load("headerandfooter/footer.php");
      });
    </script>
  </head>
  <body>
  <?php
    include "connection.php";
    $sql = "SELECT * FROM movies";
    ?>
    <header><div id="header"></div></header>
    <main id="main">

    <?php
            if ($result = mysqli_query($con, $sql)) {
                    for ($i = 0; $i <= 5; $i++) {
                        $row = mysqli_fetch_array($result);
                        
                        echo'
                        <div class="movie">
                        <a href="movie.php?ID=' .$row['mname'] . '&   ">
                          <img src="' . $row['mimg'] . '" alt="Poster" />
                        </a>
                        <div class="info">
                          <h3>' . $row['mname'] . '</h3>
                        </div>
                        </div>
                        ';
                    }
                    echo'<br/><br/>';
                    mysqli_free_result($result);
                
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            }
            mysqli_close($con);
            ?>
    </main>
    <footer><div id="footer"></div></footer>
  </body>
</html>
