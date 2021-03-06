<!DOCTYPE html>
<?php
date_default_timezone_set('Asia/Jakarta');
function asDollars($value) {
    return 'Rp ' . number_format($value);
    
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
                <div class="col-md-10">
                    <button class="btn btn-success" id="dailybtn" style="margin-top:10px;padding:20px;">Report Daily Sales</button>
                    <button class="btn btn-success" id="peritembtn" style="margin-top:10px;padding:20px;">Report Sales Per item</button>
                    <button class="btn btn-success" id="clockbtn" style="margin-top:10px;padding:20px;">Report Clock IN / OUT</button>
                    <button class="btn btn-success" id="hourlybtn" style="margin-top:10px;padding:20px;">Report Hourly Sales</button>
                    <button class="btn btn-success" id="xreadingbtn" style="margin-top:10px;padding:20px;">Summary Report(X Reading)</button>
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
            <!--            table daily per item-->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="reportclock">
                    <a href="./clockinoutreport.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Custom Report(Report of Clock In and Out)
                </button>
                      </a>
                    <div class="card">
                        
                        <div class="body">
                            <table class="table table-hover" id="tableclock">
                                <caption>Report ClockIn &amp; ClockOut &nbsp;<button onclick="exportToExcelclock()" class="btn btn-success">Excel</button></caption>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Absence ID</th>
                                        <th>Absence Name</th>
                                        <th>Time IN</th>
                                        <th>Time OUT</th>
                                        <th>Total Hours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php        
                                    include "../config/connection.php";

                                    $sql = "select distinct(DATE_DATA) as data from iatabsence order by date_data desc";
                                    $query = mysqli_query($conn,$sql);
                                    $count = 0;
                                    $subtotalall = 0;
                                    $totalall = 0;
                                    $number= 1;
                                    while($row = mysqli_fetch_array($query))
                                    {
                                        $subtotalall=0;
                                        echo '<tr><td colspan="6" style="text-align:center;">'; echo date('d F Y',strtotime($row['data'])); echo'</td></tr>';
                                                $sql1 = "select * from iatabsence where date_data='".$row['data']."'";
                                                $query1 = mysqli_query($conn,$sql1);
                                                while($row1 = mysqli_fetch_array($query1))
                                                {
                                                    echo "<tr><td>"; echo $number; echo "</td>";
                                                    $number++;
                                                        $sql2= "select * from iamabsence where absence_id='".$row1['absence_id']."'";
                                                        $query2 = mysqli_query($conn,$sql2);
                                                        while($row2 = mysqli_fetch_array($query2))
                                                        {
                                                            echo "<td>"; echo $row2['absence_id']; echo "</td>";
                                                            echo "<td>"; echo $row2['absence_name']; echo "</td>";

                                                            $tmptm1 = strtotime($row1['DATE_IN']);
                                                            $tmptm2 = strtotime($row1['DATE_OUT']);
                                                            $tmptm3 = strtotime($row2['time_out']);
                                                        
                                                            
                                                            
                                                        

                                                           /* $diff = abs(strtotime($date2) - strtotime($date1));

                                                            $years = floor($diff / (365*60*60*24));
                                                            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                            printf("%d years, %d months, %d days\n", $years, $months, $days);*/

                                                            $time1 = date("H:i A", $tmptm1);
                                                            $time2 = date("H:i A", $tmptm2);
                                                            $time3 = date("H:i A", $tmptm3);
                                                            
                                                            
                                                            echo "<td>"; echo $time1; echo "</td>";
                                                            if($row1['DATE_OUT']=='00:00:00' ){
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

                                                }
                                        
                                        $hour = 0;
                                        $mins = 0;
                                        $hour = floor($subtotalall / (60*60));

                                        $mins = floor(($subtotalall - $hour * (60*60)) / (60));


                                        
                                        ?>
                                            <tr>
                                                <td colspan="4" style="text-align:center;"><b>Total Hours for <?php echo date('d F Y',strtotime($row['data'])); ?></b></td>
                                                <td><b><?php echo '<td>'.$hour.' Hours '.$mins.' Minutes</td></tr>'; ?></b></td>
                                            </tr>
                                    
                                    <?php
                                         echo '<tr style="border:none;"><td colspan="7" style="border:none;"></td></tr>';
                                        echo '<tr style="border:none;"><td colspan="7" style="border:none;"></td></tr>';
                                        echo '<tr style="border:none;"><td colspan="7" style="border:none;"></td></tr>';
                                        echo '<tr style="border:none;"><td colspan="7" style="border:none;"></td></tr>';
                                        $hour = 0;
                                        $mins = 0;
                                        $count++;
                                    }
                                            $hour = 0;
                                            $mins = 0;
                                            $hour = floor($totalall / (60*60));

                                            $mins = floor(($totalall - $hour * (60*60)) / (60));
                                ?>
                                    
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4" style="text-align:center;"><b>Total All Hours</b></td>
                                                <td><b><?php echo '<td>'.$hour.' Hours '.$mins.' Minutes</td></tr>'; $hour = 0;
                                        $mins = 0;?></b></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                        </div>
                    </div>
                </div>
            </div>
<!--            end table daily per item-->

            <!--            table daily per item-->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="hourlysales">
                    <a href="./customhourlysales.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Custom Report(Report Hourly Sales)
                </button>
                      </a>
                    <div class="card">
                        
                        <div class="body">
                            <table class="table table-hover" id="tablehour">
                                <caption>Report Hourly Sales <button onclick="exportToExcelhour()" class="btn btn-success">Excel</button></caption>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Period</th>
                                        <th>Total  Hours </th>
                                        <th>Total Sales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    <?php  
                                    $date = date("Y-m-d");
                                    ?>
                                    
                                    <tr><td colspan="4" style="text-align:center;"><?php echo date("d F Y"); ?> </td></tr>
                                    <tr>
                                        <td>1</td>
                                        <td><?php echo '00:00:00 - 00:59:59'?></td>
                                    <?php
                                    $totalall = 0;
                                    $totalprice = 0;
                                    include "../config/connection.php";
                                        
                                        
                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '00:00:00' and '00:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                        $count = 0;
                                        $subtotalall = 0;
                                        
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>2</td>
                                        <td><?php echo '01:00:00 - 01:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '01:00:00' and '01:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>3</td>
                                        <td><?php echo '02:00:00 - 02:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '02:00:00' and '02:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    <tr>
                                        
                                        <td>4</td>
                                        <td><?php echo '03:00:00 - 03:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '03:00:00' and '03:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        
                                        <td>5</td>
                                        <td><?php echo '04:00:00 - 04:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '04:00:00' and '04:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        
                                        <td>6</td>
                                        <td><?php echo '05:00:00 - 05:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '05:00:00' and '05:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>7</td>
                                        <td><?php echo '06:00:00 - 06:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '06:00:00' and '06:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>8</td>
                                        <td><?php echo '07:00:00 - 07:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '07:00:00' and '07:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>9</td>
                                        <td><?php echo '08:00:00 - 08:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '08:00:00' and '08:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>10</td>
                                        <td><?php echo '09:00:00 - 09:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '09:00:00' and '09:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>11</td>
                                        <td><?php echo '10:00:00 - 10:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '10:00:00' and '10:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>12</td>
                                        <td><?php echo '11:00:00 - 11:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '11:00:00' and '11:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>13</td>
                                        <td><?php echo '12:00:00 - 12:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '12:00:00' and '12:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>14</td>
                                        <td><?php echo '13:00:00 - 13:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '13:00:00' and '13:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>15</td>
                                        <td><?php echo '14:00:00 - 14:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '14:00:00' and '14:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>16</td>
                                        <td><?php echo '15:00:00 - 15:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '15:00:00' and '15:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>17</td>
                                        <td><?php echo '16:00:00 - 16:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '16:00:00' and '16:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>18</td>
                                        <td><?php echo '17:00:00 - 17:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '17:00:00' and '17:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>19</td>
                                        <td><?php echo '18:00:00 - 18:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '18:00:00' and '18:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>20</td>
                                        <td><?php echo '19:00:00 - 19:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '19:00:00' and '19:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>21</td>
                                        <td><?php echo '20:00:00 - 20:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '20:00:00' and '20:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>22</td>
                                        <td><?php echo '21:00:00 - 21:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '21:00:00' and '21:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>23</td>
                                        <td><?php echo '22:00:00 - 22:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '22:00:00' and '22:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    
                                    <tr>
                                        <td>24</td>
                                        <td><?php echo '23:00:00 - 23:59:59'?></td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date' and time(tanggal) BETWEEN '23:00:00' and '23:59:59'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                            
                                        $number= 1;
                                        $tempprice=0;
                                        $count=0;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $count++;
                                            $tempprice = $tempprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalprice = $totalprice + $row1['JUMLAH_FAKTUR_RP'];
                                            $totalall = $totalall + 1;
                                        }
                                ?>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo asDollars($tempprice); ?></td>
                                    <tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2" style="text-align:center;"><b>Total All Items</b></td>
                                                <td><?php echo $totalall; ?></td>
                                                <td><?php echo $totalprice; ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                        </div>
                    </div>
                </div>
            </div>
<!--            end table daily per item-->

            <!--            table daily per item-->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="xreading">
                    <a href="./filtersalesperitem.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Custom Report(X-Reading)
                </button>
                      </a>
                    <div class="card">
                        
                        <div class="body">
                           <table class="table table-hover" id="tabledaily1">
                                <caption>Report X - Reading &nbsp;<button onclick="exportToExcel1()" class="btn btn-success">Excel</button></caption>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Description</th>
                                        <th>Total</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $date = date("Y-m-d");
                                        ?>
                                    <tr><td colspan="3" style="text-align:center;"><?php echo date("d F Y"); ?></td></tr>
                                    <tr>
                                        
                                        <td>1</td>
                                        <td>Net Sales</td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                        $temptotal = 0;
                                        $number= 1;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $temptotal = $temptotal + $row1['JUMLAH_FAKTUR_RP'];
                                        }
                                        
                                ?>
                                        <td><?php echo asDollars($temptotal); ?></td>
                                    <tr>
                                        <tr>
                                        
                                        <td>1</td>
                                        <td>Net Sales After Discount</td>
                                    <?php  

                                    
                                        $sql1 = "select * from iappenjualan where Date(TANGGAL)='$date'";
                                        
                                        $query1 = mysqli_query($conn,$sql1);
                                        $temptotal = 0;
                                        $number= 1;
                                        while($row1 = mysqli_fetch_array($query1))
                                        {
                                            $temptotal = $temptotal + $row1['JUMLAH_FAKTUR_RP'] - $row1['DISCOUNT_NILAI'];
                                        }
                                        
                                ?>
                                        <td><?php echo asDollars($temptotal); ?></td>
                                    <tr>
                                </tbody>
                                <tfoot>
                                    <tr>
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
            $("#reportclock").hide();
            $("#xreading").hide();
            $("#hourlysales").hide();
        
        $("#dailybtn").click(function(){
            $("#tabledaily").show();
            $("#tableperitem").hide();
            $("#reportclock").hide();
            $("#xreading").hide();
            $("#hourlysales").hide();
        });
        
        $("#peritembtn").click(function(){
            $("#tabledaily").hide();
            $("#tableperitem").show();
            $("#reportclock").hide();
            $("#xreading").hide();
            $("#hourlysales").hide();
        });
        
        $("#clockbtn").click(function(){
            $("#tabledaily").hide();
            $("#tableperitem").hide();
            $("#reportclock").show();
            $("#xreading").hide();
            $("#hourlysales").hide();
        });
        
        $("#hourlybtn").click(function(){
            $("#tabledaily").hide();
            $("#tableperitem").hide();
            $("#reportclock").hide();
            $("#xreading").hide();
            $("#hourlysales").show();
            
        });$("#xreadingbtn").click(function(){
            $("#tabledaily").hide();
            $("#tableperitem").hide();
            $("#reportclock").hide();
            $("#xreading").show();
            $("#hourlysales").hide();
            
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
                    link.download = "reportdailysales.xls";
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
                    link.download = "reportsalesperitem.xls";
                    link.href = uri + base64(format(template, ctx));
                    link.click();
        }
        function exportToExcelclock(){
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
        
                    var html  = document.getElementById("tableclock").innerHTML;

                    htmls = html;

                    var ctx = {
                        worksheet : 'Worksheet',
                        table : htmls
                    }


                    var link = document.createElement("a");
                    link.download = "clockinreport.xls";
                    link.href = uri + base64(format(template, ctx));
                    link.click();
        }
        function exportToExcelhour(){
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
        
                    var html  = document.getElementById("tablehour").innerHTML;

                    htmls = html;

                    var ctx = {
                        worksheet : 'Worksheet',
                        table : htmls
                    }


                    var link = document.createElement("a");
                    link.download = "hourlysalesreport.xls";
                    link.href = uri + base64(format(template, ctx));
                    link.click();
        }
    </script>
</body>

</html>
