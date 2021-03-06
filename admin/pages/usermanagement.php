﻿<!DOCTYPE html>
<html>
<?php
    session_start();
    include('..\..\config\blockadmin.php');
    if($_SESSION['error'])
        
        $_SESSION['tempuser']=null;

    if($_SESSION['error1'])
        
        $_SESSION['tempuser']=null;
    ?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <script type="text/javascript" src="../js/dialog.js"></script>
    
    <title>User Management</title>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/styleum.css">
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="widgets/../../index.php"> Happy Belly</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="..\..\index.php" class="js-right-sidebar" data-close="true"><i class="material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrator</div>
                    <div class="email"> Happy Belly</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
           <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="..\report.php">
                            <i class="material-icons">assignment</i>
                            <span>Report</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="usermanagement.php">
                            <i class="material-icons">supervised_user_circle</i>
                            <span>User Management</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018<a href="javascript:void(0);"> Happy Belly</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="block-header">
                <h2>User Management</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                &nbsp;
                                <div style="width:49%;float:left;">
                                    <h2>User List
                                      <?php
                                        if($_SESSION["error"]==null){
                                            $_SESSION["error"]="";
                                        }
                                        else if($_SESSION["error"]!=""){
                                        echo '<p>'.$_SESSION["error"].'</p>';
                                           echo' <script>
                                                $(document).ready(function(){
                                                $("#showCoupon").trigger("click");
                                            });

                                            </script>';
                                            $_SESSION["error"]="";
                                        }
                                        ?>
                               </h2>
                                </div>
                                <div style="width:49%;float:left;">
                                    &nbsp;
                                    <button type="button" class="btn btn-success" style="float:right;margin-top:-6px;" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">New User</button>
                                </div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Online</th>
                    <th>Option</th>
                </tr>
                                   
                                <?php
                   
                    include('../../config/db_connect.php');
                    //$user=$_SESSION["useradmin"];
                    $sql = "Select * from `xuser` where user_id!='".$_SESSION['username']."'" ;
                                // where username!='".$user."'
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                        
            echo "
            <tr>
              <td id='1'>$a</td>
              <td>".$row['USER_ID']."</td>";
                        if($row['STATUS']==1){
                            echo "<td>Active</td>";
                        }
                        else{
                            echo "<td>Unactive</td>";
                        }
              
                        if ($row['ONLINE']==0){echo "<td style='color:red;'>Offline</td>";}else{echo "<td style='color:green;'>Online</td>";};
              echo "</td>
              <td>
            
            <div class='dropdown'>
                                <button class='dropbtn'>Option</button>
                                <div class='dropdown-content'>
                                    
                                    <form id='submit2form' action='change_password.php' method='post'>
                                        <input type='hidden' name='username' value='".$row['USER_ID']."'>
                                        <input type='hidden' name='command' value='clear'>
                                        <a><button id='notbutton' type='submit'>Change Password</button></a>
                                        
                                    </form>
                                    <form id='submit3form' action='.\action\deleteaccount.php' method='post'>
                                        <input type='hidden' name='username' value='".$row['USER_ID']."'>
                                        <input type='hidden' name='command' value='clear'>
                                        <a onclick='return confirm('are you sure to DELETE ?')'><button id='notbutton' type='submit' >Delete</button></a>
                                        
                                    </form>
                                </div>
                            </div>
            
            </td>
            </tr>";
                    $a++;
                    }
                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="block-header">
                <h2>Absence User Management</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                &nbsp;
                                <div style="width:49%;float:left;">
                                    <h2>Absence List
                                      <?php
                                        if($_SESSION["error1"]==null){
                                            $_SESSION["error1"]="";
                                        }
                                        else if($_SESSION["error1"]!=""){
                                        echo '<p>'.$_SESSION["error1"].'</p>';
                                           echo' <script>
                                                $(document).ready(function(){
                                                $("#showCoupon").trigger("click");
                                            });

                                            </script>';
                                            $_SESSION["error1"]="";
                                        }
                                        ?>
                               </h2>
                                </div>
                                <div style="width:49%;float:left;">
                                    &nbsp;
                                    <button type="button" class="btn btn-success" style="float:right;margin-top:-6px;" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">New Absence</button>
                                </div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Absence ID</th>
                    <th>Absence Name</th>
                    <th>Absence Default Out Time</th>
                    <th>Created</th>
                    <th>Option</th>
                </tr>
                                   
                                <?php
                   
                    include('../../config/db_connect.php');
                    //$user=$_SESSION["useradmin"];
                    $sql = "Select * from `iamabsence`" ;
                                // where username!='".$user."'
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                        
            echo "
            <tr>
              <td id='1'>$a</td>
              <td>".$row['absence_id']."</td>
              <td>".$row['absence_name']."</td>
                <td>".$row['time_out']."</td>";
                        
                        $date=date_create($row['absence_createdate']);
                                echo "<td>".date_format($date,"d/m/Y")."</td>";
              echo "</td>
              <td>
            
            <div class='dropdown'>
                                <button class='dropbtn'>Option</button>
                                <div class='dropdown-content'>
                                    
                                    <form id='submit2form' action='change_absence.php' method='post'>
                                        <input type='hidden' name='absenceid' value='".$row['absence_id']."'>
                                        <input type='hidden' name='command' value='clear'>
                                        <a><button id='notbutton' type='submit'>Change Password</button></a>
                                        
                                    </form>
                                    <form id='submit3form' action='.\action\deleteabsence.php' method='post'>
                                        <input type='hidden' name='absenceid' value='".$row['absence_id']."'>
                                        <input type='hidden' name='command' value='clear'>
                                        <a onclick='return confirm('are you sure to DELETE ?')'><button id='notbutton' type='submit' >Delete</button></a>
                                        
                                    </form>
                                </div>
                            </div>
            
            </td>
            </tr>";
                    $a++;
                    }
                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
        
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="../config/adduser.php" method="post">
        <div class="container">
          <h1>New User</h1>
          <p>Please fill in this form to Add new User.</p>
          <hr>
          <label for="email"><b>User ID</b></label>
          <input type="text" placeholder="Enter User's id" name="userid" required>
            <label for="email"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
         
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    float: left;
  width: 50%;
    opacity: 0.9;">Cancel</button>
            <button type="submit" class="signupbtn" style="    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    float: left;
  width: 50%;
    opacity: 0.9;">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
    
    <div id="id02" class="modal">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="../config/addabsence.php" method="post">
        <div class="container">
          <h1>New Absence</h1>
          <p>Please fill in this form to Add new Absence.</p>
          <hr>
          <label for="email"><b>Absence ID</b></label>
          <input type="text" placeholder="Enter User's Absence id" name="absenceid" required>
            <label for="email"><b>Absence Name</b></label>
          <input type="text" placeholder="Enter Name" name="absencename" required>
            <div class="form-group">
                <label for="email"><b>PassCode</b></label>
                  <input style="background-color:lightgrey;padding:8px;" class="form-control" type="number" placeholder="Enter Passcode" name="passcode" required>
            </div>
            <div class="form-group">
                <label for="email"><b>Time OUT</b></label>
                  <input style="background-color:lightgrey;padding:8px;" class="form-control" type="time" placeholder="Time" name="timeout" value="<?php echo date('h:i'); ?>" required>
            </div>
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    float: left;
  width: 50%;
    opacity: 0.9;">Cancel</button>
            <button type="submit" class="signupbtn" style="    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    float: left;
  width: 50%;
    opacity: 0.9;">Sign Up</button>
          </div>
        </div>
      </form>
    </div>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>    

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
    
    
</body>

</html>
