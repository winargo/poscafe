<!DOCTYPE html>
<?php
    session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['username']="";
}
if(!isset($_SESSION['error'])){
    $_SESSION['error']="";
}
if($_SESSION['username']!=""){
    header("Location: ./orders.php");
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
        <a href="./index.php"><img class="logo" src="./images/logo.png"></a>
</hgroup>
      
<form method="post" action="./absence.php">
    <input name="absencedata" type="hidden" value="in">
 <button type="submit" class="button buttonBlue" style="background-color:red;">Clock in
    <div class="ripples waves-effect buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
      
<form method="post" action="./absence.php">
    <input name="absencedata" type="hidden" value="out">
 <button type="submit" class="button buttonBlue" style="background-color:green;">Clock out
    <div class="ripples waves-effect buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer>
</footer>






  </body>
</html>
