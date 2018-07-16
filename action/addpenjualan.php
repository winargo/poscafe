<?php
include "../config/connection.php";


$namastock = $_POST['namastock'];
$qty = $_POST['qty'];
$userid = $_POST['userid'];
$harga = $_POST['harga'];

$q1 = "select * from cart where checkout_status = 0";
$s1 = mysqli_query($conn,$q1);

while ($row = mysqli_fetch_array($s1)) {
  if ($row["KODE_STOCK"] == $namastock) {
      $s2 = "update cart set QTY = QTY + 1 where KODE_STOCK = '$namastock'";
      $q2 = mysqli_query($conn,$s2);
      if($q2)
      {
        header("Location: ../orders.php");
        exit();
      }
  }
  else{
    echo "Error";
  }
}

  $query = "insert into cart (KODE_STOCK,QTY,UNIT,HARGA,user_id) value ('$namastock','$qty','pcs','$harga','$userid')";
  $sql  = mysqli_query($conn,$query);

  if($sql)
  {
    echo "TRUE";
    header("Location: ../orders.php");
    exit();
  }
  else {
    echo "error 2";
  }
 ?>
