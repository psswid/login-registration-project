<?php
  //allow the config
  define('__CONFIG__', true);
  //Req config
  require_once "includes/config.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />

  </head>
  <body>
    <div class="uk-section uk-container">
    <?php
      echo "Today is: ";
      echo date("Y m d");
    ?><br \>
    <a href="login.php">Login</a><br \>
    <a href="register.php">Register</a>
    </div>

  <?php include_once "includes/footer.php" ?>

  </body>
</html>
