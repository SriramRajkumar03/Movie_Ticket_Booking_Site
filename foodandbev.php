<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="scripts/script.js" defer></script>
    <title>Food and Beverages</title>
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
    $sql = "SELECT * FROM foodandbev";
    ?>
    <header><div id="header"></div></header>
    <div class="imgs">
    <?php
            if ($result = mysqli_query($con, $sql)) {
                    for ($i = 0; $i <= 4; $i++) {
                        $row = mysqli_fetch_array($result);
                        echo'
                        <img src="' . $row['fimg'] . '" alt="fandb" class="pop" />
                        <p>' . $row['fdet'] . '</p>
                        <br />
                        ';
                    }
                    echo'<br/><br/>';
                    mysqli_free_result($result);
                
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
            }
            mysqli_close($con);
            ?>

    </div>
    <footer><div id="footer"></div></footer>
  </body>
</html>
