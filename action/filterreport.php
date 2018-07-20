<?php
include "../config/connection.php";


$tgl = $_POST['date'];
$time = $_POST['time'];

$sql = "select * from iappenjualan where tanggal = '$tgl'";

$query = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($query))
{
    
}


?>