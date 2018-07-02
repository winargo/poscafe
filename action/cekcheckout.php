<?php
include "../config/connection.php";


$namastock = $_POST['namastock'];
$qty = $_POST['qty'];
$userid = $_POST['userid'];
$harga = $_POST['harga'];

$query = "insert into cart (KODE_STOCK,QTY,UNIT,HARGA,user_id) value ('$namastock','$qty','pcs','$harga','$userid')";
$sql  = mysqli_query($conn,$query);

if($sql)
{
  echo "TRUE";
  header("Location: ../orders.php");
  exit();
}
 ?>
