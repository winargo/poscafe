<?php
include "../config/connection.php";


$namastock = $_POST['namastock'];

$query = "insert into cart (KODE_STOCK) value ('$namastock')";
$sql  = mysqli_query($conn,$query);

if($sql)
{
  echo "TRUE";
  header("Location : ../orders.php");
}
 ?>
