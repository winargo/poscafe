<?php
include "../config/connection.php";


$namastock = $_POST['namastock'];
$qty = $_POST['qty'];
$userid = $_POST['userid'];
$harga = $_POST['harga'];

$iatpenjualan = ""

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

  $query = "INSERT INTO IAPPENJUALAN (NO_FAKTUR, KODE_LOKASI, KODE_CUSTOMER, TANGGAL, J_TEMPO, KODE_MATAUANG, KURS_TUKAR, KODE_SALESMAN,JUMLAH, JUMLAH_FAKTUR_RP, USER_ID, FAKTUR_DO, DN) VALUES
 ('".[' nofaktur ']."','".[' lokasi ']."','".[' generator.satucust ']."','".[' generator.parsedate ']."','".[' generator.parsedate(generator.satutanggal, "4") ']."','IDR',1,
 '".[' getsalesmancode(generator.satukasir) ']."','".[' subtotalval ']."','".[' totalakhirval ']."','".[' generator.userlogin ']."',0,0)('$namastock','$qty','pcs','$harga','$userid')";
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
