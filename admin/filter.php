<!DOCTYPE html>
<?php
date_default_timezone_set('Asia/Jakarta');
function asDollars($value) {
    return 'Rp' . number_format($value);
    
  }

$totalqty = 0;
$totalsales = 0;
$totalpayment = 0;
$totaldue = 0;
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>rReport</title>
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
                <a class="navbar-brand" href="index.php">ADMINBSB - MATERIAL DESIGN</a>
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
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
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
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
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
                        <h5 class="modal-title" id="exampleModalLabel">Report Daily Sales</h5>
                        <button onclick="window.history.go(-1); return false;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">X</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="filter.php" method="post">
                           <div class="form-group">
                                <input type="hidden" name="filtered" value="a">
                               From
                                <input type="date" name="date1" value="<?php if(isset($_POST['date1'])){  echo date("Y-m-d",strtotime($_POST['date1']));        }else {echo date('Y-m-d');}?>">&nbsp;&nbsp; to &nbsp;&nbsp;
                               <input type="date" name="date2" value="<?php if(isset($_POST['date2'])){  echo date("Y-m-d",strtotime($_POST['date2']));        }else {echo date('Y-m-d');}?>">
                            </div>
                            <div class="form-group">
                                From
                                <input type="time"  placeholder="Time" name="time1" value="<?php if(isset($_POST['time1'])){  echo date("H:i",strtotime($_POST['time1']));}else {echo date('H:i');}?>">&nbsp;&nbsp;/&nbsp;&nbsp;
                                <input type="time"  placeholder="Time" name="time2" value="<?php if(isset($_POST['time2'])){  echo date("H:i",strtotime($_POST['time2']));}else {echo date('H:i');}?>">
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
                                if(isset($_POST['filtered'])){
                                   // echo $_POST['filtered'];
                                }
                                       else{
                                      //     echo "";
                                       }
                                if(isset($_POST['filtered']) && $_POST['filtered']!=""){
                                    echo"
                                    <table class='table table-hover' id='datatablecustom'>
                    <caption>Report Daily Sales Per item&nbsp;";echo date("d/m/y",strtotime($_POST['date1']))." - ".date("d/m/y",strtotime($_POST['date2']))  ;  echo"&nbsp;</caption><button onclick='exportToExcel()' class='btn btn-success'>Excel</button>
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
                                    ";
                            include "../config/connection.php";

                                    
                            $tmpdt1 = strtotime($_POST['date1']);
                            $tmpdt2 = strtotime($_POST['date2']);
                            $tmptm1 = strtotime($_POST['time1']);
                            $tmptm2 = strtotime($_POST['time2']);
                                    
                            $date1 = date("Y/m/d", $tmpdt1);
                            $date2 = date("Y/m/d", $tmpdt2);
                                    
                            $time1 = date("H:i", $tmptm1);
                            $time2 = date("H:i", $tmptm2);
                                    
                            $sql = "select * from iappenjualan where tanggal between '$date1' and '$date2' and time(tanggal) BETWEEN '$time1' and '$time2' ";
                            $query = mysqli_query($conn,$sql);
                            $count = 1;
                            while($row = mysqli_fetch_array($query))
                            {
                                echo "<tr><td>";
                                echo $count;
                                echo "</td><td>";
                                echo $row['NO_FAKTUR'];
                                echo "</td><td>";
                                $comp = preg_split('/ +/', $row['TANGGAL']);
                                $date=date_create($comp[0]);
                                echo date_format($date,"d/m/Y")." ";
                                $date1=date_create($comp[1]);
                                echo "</td><td>";
                                echo date_format($date1,"H:i a");
                                echo "</td><td>";
                            
                                    $sql1 = "select * from iatpenjualan1 where no_faktur='".$row['NO_FAKTUR']."'";
                                    $query1 = mysqli_query($conn,$sql1);
                                    $count1 = 1;
                                    $total1 = 0;
                                    while($row1 = mysqli_fetch_array($query1))
                                    {
                                        $total1 += $row1['QTY'];
                                        $totalqty+=$row1['QTY'];
                                    }
                                        echo $total1;
                                        echo "</td><td>";
                                                $q4 = "select * from iappenjualan where no_faktur='".$row['NO_FAKTUR']."'";
                                                $s4 = mysqli_query($conn,$q4);
                                                $qty = 0;
                                                $morepay = 0;
                                                while ($row4 = mysqli_fetch_array($s4)) {
                                                    echo asDollars($row4['JUMLAH_FAKTUR_RP']);
                                                    $totalsales += $row4['JUMLAH_FAKTUR_RP'];

                                                    $morepay = $row4['BAYAR']-$row4['JUMLAH_FAKTUR_RP'];
                                                    $totalpayment += $row4['BAYAR'];
                                                    $totaldue += $morepay;
                                                    echo "</td><td>";
                                                    echo asDollars($row4['BAYAR']);
                                                    echo"</td><td>";
                                                    echo asDollars($morepay);
                                                    echo"</td>";
                                                }
                                echo"</tr>";
                                $count++;
                            }
                                    echo"
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan='4' style='text-align:center;'><b>Grand Total</b></td>
                            <td><b>";
                                    echo $totalqty;
                                    echo"</b></td><td><b>";
                                    echo asDollars($totalsales);
                                    echo"</b></td><td><b>"; 
                                    echo asDollars($totalpayment); echo"</b></td><td><b>";
                                    echo asDollars($totaldue);
                                    echo "</b></td>
                        </tr>
                    </tfoot>
                </table>
                            ";
                            $_POST['filtered']="";
                                }
                                       else{
                                    
                            ?>
                            
                           <table class="table table-hover">
                    <caption>Report Daily Per item (No Selection)</caption>
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
        function exportToExcel(){
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
        
                    var html  = document.getElementById("datatablecustom").innerHTML;

                    htmls = html;

                    var ctx = {
                        worksheet : 'Worksheet',
                        table : htmls
                    }


                    var link = document.createElement("a");
                    link.download = "export.xls";
                    link.href = uri + base64(format(template, ctx));
                    link.click();
        }
    </script>
</body>

</html>
