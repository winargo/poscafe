<?php
include "../config/connection.php";


$namastock = $_POST['namastock'];
$qty = $_POST['qty'];
$userid = $_POST['userid'];
$harga = $_POST['harga'];

$iatpenjualan = ""

$check = "select * from iatpenjualan where no_faktur = '".$_SESSION['faktur']."'";
$s1 = mysqli_query($conn,$check);

$count = 0;

while ($row = mysqli_fetch_array($s1)) {
    count++;
  
}

if (count==0) {
    $totalpost = 0;
      for($i = 0 ; i < $totalrow;i++)
      {
          $iatpenjualan1= "INSERT INTO `IATPENJUALAN1` (No_Faktur, KODE_STOCK, NAMA_STOCK, QTY, SATUAN, HARGA_JUAL, DISCOUNT,DISCOUNT_NILAI, JUMLAH, PPN, KODE_PAJAK,KODE_DEPARTEMEN, KODE_PROYEK, HARGA_LIST, QTY_KECIL,KODE_GROUP, PRINT_ITEM, GROUP_PIL, NOMOR_SO,BONUS, SATUAN_BNS, QTY_KECIL_BNS, DO_HARGA_POKOK,NO_ITEM, NO_LOT, NOMOR_KS, PACKING, SATUAN_PACK, NO_SEND, SENDING, STATUS) VALUES ('".$_POST['nofaktur']."','".$_POST['xKODE_STOCK']."','".$_POST['xNAMA_STOCK']."','".$_POST['xQty']."','".$_POST['xSATUAN']."','".$_POST['xHARGA_JUAL']."','".$_POST['xDISCOUNT']."','".$_POST['xDISCOUNT_NILAI']."','".$_POST['xJUMLAH']."','".$_POST['xPPN']."','".$_POST['xKODE_PAJAK']."','".$_POST['xKODE_DEPARTEMEN']."','".$_POST['xKODE_PROYEK']."','".$_POST['xHARGA_LIST']."','".$_POST['xQTY_KECIL']."','".$_POST['xKODE_GROUP']."','".$_POST['xPRINT_ITEM']."','".$_POST['xGROUP']."','".$_POST['xNOMOR_SO']."','".$_POST['xBonus']."','".$_POST['xSatuan_BNS']."','".$_POST['xQty_Kecil_BNS']."','".$_POST['xDO_Harga_Pokok']."','".$_POST['data']."','".$_POST['xNO_LOT']."','".$_POST['xNOMOR_KS']."','".$_POST['xPACKING']."','".$_POST['xSATUAN_PACK']."','".$_POST['xNO_SEND']."','".$_POST['xSENDING']."','".$_POST['xSTATUS']."')";
          
          $sql  = mysqli_query($conn,$iatpenjualan1);


          if($sql)
          {
            $totalpost++;
            //header("Location: ../orders.php");
            //exit();
          }
          else {
            echo "error posting iatpenjualan1";
          }
        //header("Location: ../orders.php");
        //exit();
      }
        if($totalpost==$totalrow){
            //"yyyy-MM-dd HH:mm:ss"
            $iatpenjualan = "INSERT INTO IAPPENJUALAN (NO_FAKTUR, KODE_LOKASI, KODE_CUSTOMER, TANGGAL, J_TEMPO, KODE_MATAUANG, KURS_TUKAR, KODE_SALESMAN,JUMLAH, JUMLAH_FAKTUR_RP, USER_ID, FAKTUR_DO, DN) VALUES
             ('".[' nofaktur ']."','web','cash','".[' generator.parsedate ']."','".[' generator.parsedate(generator.satutanggal, "4") ']."','IDR',1,
             'web','".[' subtotalval ']."','".[' totalakhirval ']."','".[' generator.userlogin ']."',0,0)"

        }
    
    
  }



$iatpenjualan = "INSERT INTO IAPPENJUALAN (NO_FAKTUR, KODE_LOKASI, KODE_CUSTOMER, TANGGAL, J_TEMPO, KODE_MATAUANG, KURS_TUKAR, KODE_SALESMAN,JUMLAH, JUMLAH_FAKTUR_RP, USER_ID, FAKTUR_DO, DN) VALUES
 ('".[' nofaktur ']."','".[' lokasi ']."','".[' generator.satucust ']."','".[' generator.parsedate ']."','".[' generator.parsedate(generator.satutanggal, "4") ']."','IDR',1,
 '".[' getsalesmancode(generator.satukasir) ']."','".[' subtotalval ']."','".[' totalakhirval ']."','".[' generator.userlogin ']."',0,0)"
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
