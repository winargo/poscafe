<!DOCTYPE html>
<html>
<?php
    session_start();
    if($_SESSION['error'])
    ?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <script type="text/javascript" src="./js/dialog.js"></script>
    
    <title>User Management</title>

    <!-- Favicon-->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="./admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="./admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="./admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="./admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="./admin/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" href="./admin/css/styleum.css">
    <link rel="stylesheet" href="./css/order.css">
</head>

<body class="theme-red">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header" style="margin-left:2%;">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="order.php" style="padding:0;margin:0;width:auto;"><img src="./images/logo.PNG" width="60px" height="60px"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
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
    
    <!-- Jquery Core Js -->
    <script src="./admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="./admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="./admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="./admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="./admin/plugins/node-waves/waves.js"></script>    

    <!-- Custom Js -->
    <script src="./js/admin.js"></script>

    <!-- Demo Js -->
    <script src="./js/demo.js"></script>
    
    
</body>

</html>
