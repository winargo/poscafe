<?php
include "../config/connection.php";


$tgl1 = $_POST['date1'];
$tgl2 = $_POST['date2'];
$time1 = $_POST['time1'];
$time2 = $_POST['time2'];

    $sql = "select * from iappenjualan where tanggal between '$tgl1' and '$tgl2' and tanggal between time('$time1') and time('$time2') order by tanggal desc ";

    $query = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($query))
    {
        
    }





?>