<!DOCTYPE html>
<?php
date_default_timezone_set('Asia/Jakarta');
function asDollars($value) {
    return 'Rp' . number_format($value);
    
  }

include "../config/connection.php";

$totalqty = 0;
$filtered = "";
$totalsales = 0;
$totalpayment = 0;
$totaldue = 0;

$totalqty1 = 0;
$totalsales1 = 0;
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Clock In / Out Report</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper" style="display:none;">
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
                <a class="navbar-brand" href="index.php"> Happy Belly</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="..\index.php" class="js-right-sidebar" data-close="true"><i class="material-icons">exit_to_app</i></a></li>
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
                    <img src="images/user.png" width="48" height="48" alt="User" />
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
                    <li >
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="report.php">
                            <i class="material-icons">assignment</i>
                            <span>Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/usermanagement.php">
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
        <!-- #END# Right Sidebar -->
    </section>
 <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="row" style="margin-bottom:20px;">
               <div class="col-md-4">&nbsp;</div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="tabledaily">
                  <!-- Modal -->
                   
                    <div class="card">
                        <div class="body">
                            
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Report Clock IN and Out</h5>
                        <button onclick="window.history.go(-1); return false;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">X</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="clockinoutreport.php" method="post">
                           <div class="form-group">

                               <input type="hidden"  name="filtered" value="a">
                               <p>Filter By Date</p>
                               From
                                <input type="date" name="date1" value="<?php if(isset($_POST['date1'])){  echo date("Y-m-d",strtotime($_POST['date1']));        }else {echo date('Y-m-d');}?>">&nbsp;&nbsp; to &nbsp;&nbsp;
                               <input type="date" name="date2" value="<?php if(isset($_POST['date2'])){  echo date("Y-m-d",strtotime($_POST['date2']));        }else {echo date('Y-m-d');}?>">
                            </div>
                            
                            <p>Filter By Name</p>
                            <div class="form-group">
                               From
                                <select name="absence1" class="custom-select" style="width:30%;">
                                    <?php
                                    $sql = "select * from iamabsence order by absence_id asc";
                                    $query = mysqli_query($conn,$sql);
                                    $count = 1;
                                    while($row = mysqli_fetch_array($query))
                                    {
                                        if(isset($_POST['absence1'] ) && $_POST['absence1']!=""){
                                            if($_POST['absence1']==$row['absence_name'])
                                            {
                                                echo "<option value='".$row['absence_id']."' selected>".$row['absence_name']."</option>";
                                            }
                                            else{
                                                echo "<option value='".$row['absence_id']."'>".$row['absence_name']."</option>";
                                            }
                                        }
                                           else{
                                               echo "<option value='".$row['absence_id']."'>".$row['absence_name']."</option>";
                                           }
                                        

                                    }
                                    
                                    ?>
                                </select>
                               
                               To 
                               <select name="absence2" class="custom-select" style="width:30%;">
                                    <?php
                                    $sql = "select * from iamabsence order by absence_id asc";
                                    $query = mysqli_query($conn,$sql);
                                    $count = 1;
                                    while($row = mysqli_fetch_array($query))
                                    {
                                        if(isset($_POST['absence2'] ) && $_POST['absence2']!=""){
                                            if($_POST['absence2']==$row['absence_name'])
                                            {
                                                echo "<option value='".$row['absence_id']."' selected>".$row['absence_name']."</option>";
                                            }
                                            else{
                                                echo "<option value='".$row['absence_id']."'>".$row['absence_name']."</option>";
                                            }
                                        }
                                           else{
                                               echo "<option value='".$row['absence_id']."'>".$row['absence_name']."</option>";
                                           }
                                        

                                    }
                                    
                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Filter">
                            </div>
                        </form>
                      </div>
                        </div>
                    </div>
                </div>
            </div>
            
<!--            table daily per item-->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="tableperitem">
                    <div class="card">
                        
                        <div class="body">
                            
                            <?php
                                if(isset($_POST['filtered'])&& $_POST['filtered']!="" ){
                                    
                                 ?>
                            
                            
                           <table class="table table-hover" id="tabledaily1">
                                <caption>Report Clock IN and OUT &nbsp;<button onclick="exportToExcel1()" class="btn btn-success">Excel</button></caption>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Absence Name</th>
                                        <th>Time IN</th>
                                        <th>Time OUT</th>
                                        <th>Total Time</th>
                                </thead>
                                <tbody>
                                   <?php        
                                    include "../config/connection.php";
                                    
                                    $tmpdt1 = strtotime($_POST['date1']);
                                    $tmpdt2 = strtotime($_POST['date2']);

                                    $date1 = date("Y/m/d", $tmpdt1);
                                    $date2 = date("Y/m/d", $tmpdt2);

                                    $sql = "select * from iatabsence where DATE_DATA between '$date1' and '$date2' and absence_id between '".$_POST['absence1']."' and '".$_POST['absence2']."'  order by absence_id,date_data desc";
                                    $tmptm3=null;
                                    $query = mysqli_query($conn,$sql);
                                    $count = 0;
                                    $subtotalall = 0;
                                    $totalall = 0;
                                    $number= 1;
                                    $checkdone="0";
                                    while($row = mysqli_fetch_array($query))
                                    {
                                        
                                        //echo date('d F Y',strtotime($row['DATE_DATA']));
                                        if($checkdone!=$row['absence_id']){
                                            if($count!=0){
                                                echo "<tr>";
                                                echo '<td colspan="3" style="text-align:center;"><b>Total Hours for '; 
                                                
                                                $sql1 = "select * from iamabsence where absence_id='$checkdone'";
                                                $query1 = mysqli_query($conn,$sql1);
                                                while($row1 = mysqli_fetch_array($query1))
                                                {
                                                    echo $row1['absence_name'];
                                                }
                                                
                                                $hour = floor($subtotalall / (60*60));

                                                $mins = floor(($subtotalall - $hour * (60*60)) / (60));
                                                
                                                echo "</b></td>";
                                                echo "<td><b>"; echo '<td>'.$hour.' Hours '.$mins.' Minutes</td></tr>'; echo "</b></td>";
                                                echo "</tr>";
                                                $subtotalall=0;
                                                
                                                echo '<tr style="border:none;"><td colspan="5" style="border:none;"></td></tr>';
                                                echo '<tr style="border:none;"><td colspan="5" style="border:none;"></td></tr>';
                                                echo '<tr style="border:none;"><td colspan="5" style="border:none;"></td></tr>';
                                                echo '<tr style="border:none;"><td colspan="5" style="border:none;"></td></tr>';
                                                $count=0;
                                            }
                                            
                                            
                                            $sql1 = "select * from iamabsence where absence_id='".$row['absence_id']."'";
                                                $query1 = mysqli_query($conn,$sql1);
                                                while($row1 = mysqli_fetch_array($query1))
                                                {
                                                    echo '<tr><td colspan="5" style="text-align:center;">'; echo $row1['absence_name'];   echo'</td></tr>';
                                                }
                                            
                                            $checkdone=$row['absence_id'];
                                            $number=1;
                                            $count=1;
                                            
                                        }
                                        echo "<tr><td>"; echo $number; echo "</td>";
                                        echo "<td>"; echo date('d F Y',strtotime($row['DATE_DATA'])); echo "</td>";
                                        $sql2 = "select * from iamabsence where absence_id='".$row['absence_id']."'";
                                        $query2 = mysqli_query($conn,$sql2);
                                        while($row2 = mysqli_fetch_array($query2))
                                        {
                                            $tmptm3=strtotime($row2['time_out']);
                                            $tmptm1 = strtotime($row['DATE_IN']);
                                            $tmptm2 = strtotime($row['DATE_OUT']);





                                           /* $diff = abs(strtotime($date2) - strtotime($date1));

                                            $years = floor($diff / (365*60*60*24));
                                            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                            printf("%d years, %d months, %d days\n", $years, $months, $days);*/

                                            $time1 = date("H:i A", $tmptm1);
                                            $time2 = date("H:i A", $tmptm2);
                                            $time3 = date("H:i A", $tmptm3);


                                            echo "<td>"; echo $time1; echo "</td>";
                                            if($row['DATE_OUT']=='00:00:00' ){
                                                $checkTime = $tmptm3;

                                                $loginTime = $tmptm1;
                                                $diff = $checkTime - $loginTime;

                                                $totalall = $totalall+$diff;
                                                $subtotalall = $subtotalall + $diff;

                                                echo "<td>"; echo $time2; echo "('$time3')</td>";

                                                $temp = abs($diff);
                                                $hour = floor($diff / (60*60));

                                                $mins = floor(($diff - $hour * (60*60)) / (60));


                                                echo '<td>'.$hour.' Hours '.$mins.' Minutes</td></tr>';
                                            }
                                            else{
                                                $checkTime = $tmptm2;

                                                $loginTime = $tmptm1;
                                                $diff = $checkTime - $loginTime;

                                                $totalall = $totalall+$diff;
                                                $subtotalall = $subtotalall + $diff;

                                                echo "<td>"; echo $time2; echo "</td>";

                                                $temp = abs($diff);
                                                $hour = floor($diff / (60*60));

                                                $mins = floor(($diff - $hour * (60*60)) / (60));


                                                echo '<td>'.$hour.' Hours '.$mins.' Minutes</td></tr>';
                                            }
                                        }
                                        
                                        $number++;
                                        
                                        
                                        
                                    }
                                    
                                        $hour = 0;
                                        $mins = 0;
                                        $hour = floor($subtotalall / (60*60));

                                        $mins = floor(($subtotalall - $hour * (60*60)) / (60));


                                        
                                        ?>
                                            <tr>
                                                <td colspan="3" style="text-align:center;"><b>Total Hours for 
                                                    <?php echo $checkdone;  ?></b></td>
                                                <td><b><?php echo '<td>'.$hour.' Hours '.$mins.' Minutes</td></tr>'; ?></b></td>
                                            </tr>
                                    
                                    <?php
                                         echo '<tr style="border:none;"><td colspan="5" style="border:none;"></td></tr>';
                                        echo '<tr style="border:none;"><td colspan="5" style="border:none;"></td></tr>';
                                        echo '<tr style="border:none;"><td colspan="5" style="border:none;"></td></tr>';
                                        echo '<tr style="border:none;"><td colspan="5" style="border:none;"></td></tr>';
                                        $hour = 0;
                                        $mins = 0;
                                            $hour = 0;
                                            $mins = 0;
                                            $hour = floor($totalall / (60*60));

                                            $mins = floor(($totalall - $hour * (60*60)) / (60));
                                ?>
                                  
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" style="text-align:center;"><b>Total Hours ALL</b></td>
                                            
                                            
                                        <td><b><?php echo '<td>'.$hour.' Hours '.$mins.' Minutes</td>'; ?></b></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <?php
                           
                                }
                                       else{
                                    
                            ?>
                            
                           <table class="table table-hover">
                    <caption>Report Clock In and Out (No Selection)</caption>
                        </table>
                                 <?php   
                                }
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
<!--            end table daily per item-->

        </div>
    </section>
<!--
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <button class="btn">report1</button>
                <button class="btn">report2</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                <table class="table table-bordered table-hover">
                    <caption>report1</caption>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Order Number</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Quantity(Total)</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Amt(Due)</th>       
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>   
    </section>
-->

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
    
    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
<!--    momment js-->
   <script src="../js/moment.min.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    <script>
    //    $("#tabledaily").hide();
     //   $("#tableperitem").hide();
     //   $("#dailybtn").click(function(){
     //       $("#tabledaily").show();
     //       $("#tableperitem").hide();
     //   });
      //  $("#peritembtn").click(function(){
      //      $("#tabledaily").hide();
      //      $("#tableperitem").show();
      //  });
      //  
        
        function exportToExcel1(){
        var htmls = "";
                    var uri = 'data:application/vnd.ms-excel;base64,';
                    var template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'; 
                    var base64 = function(s) {
                        return window.btoa(unescape(encodeURIComponent(s)))
                    };

                    var format = function(s, c) {
                        return s.replace(/{(\w+)}/g, function(m, p) {
                            return c[p];
                        })
                    };
        
                    var html  = document.getElementById("tabledaily1").innerHTML;

                    htmls = html;

                    var ctx = {
                        worksheet : 'Worksheet',
                        table : htmls
                    }


                    var link = document.createElement("a");
                    link.download = "customClockinandout.xls";
                    link.href = uri + base64(format(template, ctx));
                    link.click();
        }
    </script>
</body>

</html>
