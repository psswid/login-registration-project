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
      <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
        <form class="uk-form-stacked js-register">

          <h2>Register</h2>

          <div class="uk-margin">
              <label class="uk-form-label" for="form-stacked-text">Email</label>
              <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" required="required" type="email" placeholder="E-mail">
              </div>
          </div>

          <div class="uk-margin">
              <label class="uk-form-label" for="form-stacked-text">Password</label>
              <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" required="required" type="password" placeholder="Password">
              </div>
          </div>

          <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'>
          </div>

          <div class="uk-margin">
            <button class="uk-button uk-button-default" type="submit">Register</button>
          </div>

        </form>
      </div>
    </div>

  <?php include_once "includes/footer.php" ?>

  </body>
</html>
