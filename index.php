<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

	  <link rel="stylesheet" href="./css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/login.css">

    <script src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/login.js"></script>

  </head>

  <body>

    <hgroup>
  <img class="logo" src="./images/logo.png">
</hgroup>
<form method="post" action="./config/checkuser">
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Username</label>
  </div>
  <div class="group">
    <input type="password"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button type="button" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer>
</footer>






  </body>
</html>
