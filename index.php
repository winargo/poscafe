<!DOCTYPE html>
<?php
    session_start();
    $_SESSION["error"]="";
    $_SESSION["username"]="";
        if($_SESSION['username']!=""){
            header ("Location: .\orders.php");
            exit();
        }

 ?>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

	  <link rel="stylesheet" href="./css/bootstrap.min.css">

    

    <script src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/login.js"></script>
    <link rel="stylesheet" href="./css/login.css">

  </head>

  <body>

    <hgroup>
  <img class="logo" src="./images/logo.png">
</hgroup>
<form method="post" action="./action/checklogin.php">
  <div class="group">
    <input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
    <label>Username</label>
  </div>
  <div class="group">
    <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <?php
        if($_SESSION["error"]==null){
            $_SESSION["error"]="";
        }
        else if($_SESSION["error"]!=""){
        echo '<p>'.$_SESSION["error"].'</p>';
            $_SESSION["error"]="";
        }
        ?>
  <button type="submit" class="button buttonBlue">Login
    <div class="ripples waves-effect buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer>
</footer>






  </body>
</html>
