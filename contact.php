<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
    <script src="scripts/script.js" defer></script>
    <title>Contact Us</title>
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
    ?>
    <header><div id="header"></div></header>
    <div class="contact">
      <p>Contact Us</p>
    </div>
        <div class="form">
        <form action="" method="POST">
                <input placeholder="Name" name="fname" required><br><br>
                <input placeholder="E-mail address" name="email" required><br><br>
                <textarea placeholder="Enter your message" name="feedback" rows="8" cols="40" required></textarea>
                      <br><br>
                <button type="submit" name="submit" value="submit">Submit</button>
                <?php
                if (isset($_POST['submit'])) {
                    $insert_query = "INSERT INTO 
                        feedback ( fname,
                                        fmail,
                                        feedback)
                        VALUES (        '" . $_POST["fname"] . "',
                                        '" . $_POST["email"] . "',
                                        '" . $_POST["feedback"] . "')";
                    $add = mysqli_query($con, $insert_query);

                    if ($add) {
                        echo "<script>alert('Succesfully Submitted');</script>";
                    }
                }
                ?>
            </form>
            </div>
    </div>
    <footer><div id="footer"></div></footer>
  </body>
</html>
