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

$totalqty1 = 0;
$totalsales1 = 0;
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
                <div class="col-md-6">
                    <button class="btn btn-success" id="dailybtn" style="padding:20px;">Report Daily Sales</button>
                    <button class="btn btn-success" id="peritembtn" style="padding:20px;">Report Sales Per item</button>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="tabledaily">
                  <a href="./filter.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Custom Report(Report Daily Sales)
                </button>
                      </a>
                  <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">

                  </div>
                </div>
                   
                    <div class="card">
                        <div class="body">
                           <table class="table table-hover" id="tabledaily">
                               <caption>Report Daily Sales &nbsp;<button onclick="exportToExcel()" class="btn btn-success">Excel</button></caption>
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
                        <?php 
                            include "../config/connection.php";
                            
                            $sql = "select * from iappenjualan order by TANGGAL DESC";
                            $query = mysqli_query($conn,$sql);
                            $count = 1;
                            while($row = mysqli_fetch_array($query))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row['NO_FAKTUR']; ?></td>
                                    <td><?php  
                                    
                                        $comp = preg_split('/ +/', $row['TANGGAL']);
                                        $date=date_create($comp[0]);
                                        echo date_format($date,"d/m/Y")." ";
                                        $date1=date_create($comp[1]);
                                        
                                        ?></td>
                                    <td><?php echo date_format($date1,"H:i a"); ?></td>
                                    <td><?php 
                                        
                                include "../config/connection.php";
                            
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
                                        ?></td>
                                        <td><?php 
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
                          ?></td>
                                    <td><?php echo asDollars($row4['BAYAR'])?></td>
                                    <td><?php echo asDollars($morepay)?></td>
                                     <?php 
                                                }
                                    ?>   
                                </tr>
                                <?php
                                $count++;
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" style="text-align:center;"><b>Grand Total</b></td>
                            <td><b><?php echo $totalqty?></b></td>
                            <td><b><?php echo asDollars($totalsales)?></b></td>
                            <td><b><?php echo asDollars($totalpayment)?></b></td>
                            <td><b><?php echo asDollars($totaldue)?></b></td>
                        </tr>
                    </tfoot>
                </table>
                        </div>
                    </div>
                </div>
            </div>
            
<!--            table daily per item-->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="tableperitem">
                    <a href="./filtersalesperitem.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Custom Report(Report Sales Per item)
                </button>
                      </a>
                    <div class="card">
                        
                        <div class="body">
                           <table class="table table-hover" id="tabledaily1">
                                <caption>Report Sales Per item &nbsp;<button onclick="exportToExcel1()" class="btn btn-success">Excel</button></caption>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Stock Code</th>
                                        <th>Stock Name</th>
                                        <th>Total QTY</th>
                                        <th>Total Price</th>
                                </thead>
                                <tbody>
                                    <?php        
                                        include "../config/connection.php";

                                        $sql = "select * from iamstock";
                                        $query = mysqli_query($conn,$sql);
                                        $count = 1;
                                        while($row = mysqli_fetch_array($query))
                                        {
                                            echo "<tr><td>"; echo $count; echo "</td>";
                                            echo "<td>"; echo $row['KODE_STOCK']; echo "</td>";
                                            echo "<td>"; echo $row['NAMA_STOCK']; echo "</td>";
                                            $sqlcountstock = "Select * from iatpenjualan1 where kode_stock='".$row['KODE_STOCK']."'";
                                            $query1 = mysqli_query($conn,$sqlcountstock);
                                            $totalsalesdata =0;
                                            $totalqtydata = 0 ;
                                            while($row1 = mysqli_fetch_array($query1))
                                            {
                                                $totalsalesdata = $totalsalesdata + $row1['HARGA_JUAL']* $row1['QTY'];
                                                $totalsales1 = $totalsales1 + $row1['HARGA_JUAL']* $row1['QTY'];
                                                $totalqtydata = $totalqtydata + $row1['QTY'] ;
                                                $totalqty1 = $totalqty1 +  $row1['QTY'] ;
                                            }
                                            echo "<td>"; echo $totalqtydata; echo "</td>";
                                            echo "<td>"; echo asDollars($totalsalesdata); echo "</td></tr>";
                                            $count++;
                                        }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" style="text-align:center;"><b>Grand Total</b></td>
                                        <td><b><?php echo $totalqty1?></b></td>
                                        <td><b><?php echo asDollars($totalsales1)?></b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<!--            end table daily per item-->

        </div>
    </section>

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
        $("#tabledaily").hide();
        $("#tableperitem").hide();
        $("#dailybtn").click(function(){
            $("#tabledaily").show();
            $("#tableperitem").hide();
        });
        $("#peritembtn").click(function(){
            $("#tabledaily").hide();
            $("#tableperitem").show();
        });
        
    </script>
    
    <script>
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
        
                    var html  = document.getElementById("tabledaily").innerHTML;

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
                    link.download = "export.xls";
                    link.href = uri + base64(format(template, ctx));
                    link.click();
        }
    </script>
</body>

</html>
