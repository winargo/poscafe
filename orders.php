<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if($_SESSION['error'])
    ?>
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <!--    boostrap css-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!--    custom-->
    <link rel="stylesheet" href="./css/order.css">
    
    <!-- Favicon-->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    
    <!--    bootstrap-->
<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
-->
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:orange">
      <img src="./images/logo.PNG" alt="Logo" class="navbar-brand" height="65" width="65">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            &nbsp; 
        </ul>
        <div class="btn-group float-right">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Username
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </div>
      </div>
    </nav>
    <!-- #Top Bar -->
<!--
    <div class="wrapper item">
       <div class="menureceipt"> 
           <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal" style="float:right;margin-top:-30px;">+</button>
            <div class="catalog" style="margin-top:10px;">
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxadd">
                    <img src="./images/add.png" class="additemimage" >
                 </div>
            </div> 
        </div>
        <div class="receipt">
            <div class="receipt-data">
               <div class="checkoutdata">
                   <p>dara</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
               </div>
                <div class="checkout">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"> Check Out</button>
                </div>
            </div> 
        </div>

    </div>
-->
    <div class="row">
        <div class="col-md-7">
            <div class="row" style="text-align:center;">
                <div class="col-md-2" style="background-color:orange;border-radius:5px;">
                    <img src="./images/logo.PNG" alt="logo" style="width:100%;">
                    <h6>riandy</h6>
                </div>
                <div class="col-md-2" style="background-color:orange;border-radius:5px;">
                    <img src="./images/logo.PNG" alt="logo" style="width:100%;">
                    <h6>riandy</h6>
                </div>
                <div class="col-md-2" style="background-color:orange;border-radius:5px;">    
                    <img src="./images/logo.PNG" alt="logo" style="width:100%;">
                    <h6>riandy</h6>
                </div>
                <div class="col-md-2" style="background-color:orange;border-radius:5px;">
                    <img src="./images/logo.PNG" alt="logo" style="width:100%;">
                    <h6>riandy</h6>
                </div>
                <div class="col-md-2" style="background-color:orange;border-radius:5px;">
                    <img src="./images/logo.PNG" alt="logo" style="width:100%;">
                    <h6>riandy</h6>
                </div>
                
            </div>
        </div>
        
        <div class="col-md-4" style="background-color:orange;">
             <div class="checkoutdata">
                   <p>dara</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
               </div>
                <div class="checkout">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"> Check Out</button>
                </div>
            </div> 
        </div>
    </div>
</body>
<script type="text/javascript" src="./bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
    
</html>