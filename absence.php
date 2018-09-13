<!DOCTYPE html>
<?php
    session_start();

if(!isset($_SESSION['username'])){
    $_SESSION['username']="";
}
if(!isset($_SESSION['error'])){
    $_SESSION['error']="";
}

if(isset($_POST['absencedata'])){
    if($_POST['absencedata']=="in"){
        $_SESSION['absence']="in";
    }
    else{
        $_SESSION['absence']="out";
    }
    
}
if(!isset($_SESSION['error'])){
    $_SESSION['error']="";
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
    <link rel="stylesheet" href="./css/loginpad.css">
<script>
      $(document).ready(function () {

    $('.num').click(function () {
        var num = $(this);
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
        var telNumber = $('#telNumber');
        $(telNumber).val(telNumber.val() + text);
    });

});
    
    function dele(){
        
        document.getElementById("telNumber").value = '';

    }

    
    function checkpass() {
        console.log("working");
        var x = document.getElementById("telNumber").value;
        if(x.length>=6){
            console.log('Max pass 6 characters');
        }
        else{
            
        }
    }
      
      </script>
  </head>

  <body>

    <hgroup>
  <a href="./index.php"><img class="logo" src="./images/logo.png"></a>
</hgroup>
<form method="post" action="./action/checkabsence.php">
  <div class="group" style="margin : 0 auto;">
    <input type="text" name="absence" required><span class="highlight"></span><span class="bar"></span>
    <label>Absence ID</label>
      <?php
      
      if($_SESSION["error"]==null){
            $_SESSION["error"]="";
        }
        else if($_SESSION["error"]!=""){
        echo '<p>'.$_SESSION["error"].'</p>';
            $_SESSION["error"]="";
        }
      
      ?>
  </div>
    
    <div class="container">
    <div class="row">
        <div class="col-md-4 phone" style="background-color:#fafafa;width:380px;">
            <div class="row1" style="width:380px;" >
                <div style="width:350px; padding-left:5%;">
                    <br>
                <input type="number" name="password" id="telNumber" class="form-control" onchange="checkpass()" readonly>
                    <br>
                    <div class="num-pad">
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                2 <span class="small">
                                    <p>
                                        ABC</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                3 <span class="small">
                                    <p>
                                        DEF</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                4 <span class="small">
                                    <p>
                                        GHI</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                5 <span class="small">
                                    <p>
                                        JKL</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                6 <span class="small">
                                    <p>
                                        MNO</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                7 <span class="small">
                                    <p>
                                        PQRS</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                8 <span class="small">
                                    <p>
                                        TUV</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                9 <span class="small">
                                    <p>
                                        WXYZ</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                *
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                0 <span class="small">
                                    <p>
                                        +</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="num">
                            <div class="txt">
                                #
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="clearfix">
                    </div><br>
                    <button class="btn btn-success btn-block flatbtn" type="button" onclick="dele()">Clear Passcode</button>
                    <br><br>
                </div>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
</div>
  
  <?php
        
        
    if(!isset($_SESSION['absence'])){
        ?>
    
    
    <?php
        
    }
    else{
        if($_SESSION['absence']=="in"){
            ?>
    <input type="hidden" name="typeab" value="in">
    <button type="submit" class="button buttonBlue">Clock In
    <div class="ripples waves-effect buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
    
    <?php
        }
        else{
            ?>
    <input type="hidden" name="typeab" value="out">
    <button type="submit" class="button buttonBlue" style="background-color:green">Clock Out
    <div class="ripples waves-effect buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
    
    <?php
        }
    }
    ?>
    
  
</form>
<footer>
</footer>






  </body>
</html>
