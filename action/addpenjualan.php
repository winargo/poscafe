<?php
include "../config/connection.php";


$namastock = $_POST['namastock'];
$qty = $_POST['qty'];
$userid = $_POST['userid'];
$harga = $_POST['harga'];

//$iatpenjualan = ""

$check = "select * from iatpenjualan where no_faktur = '".$_SESSION['faktur']."'";
$s1 = mysqli_query($conn,$check);

$count = mysqli_num_rows($s1);
//
//while ($row = mysqli_fetch_array($s1)) {
//    count++;
//  
//}

$sql = "select * from iamsetupseri where no_seri='JL'";
$query = mysqli_query($conn,$sql);
$nofaktur ;

while($row = mysqli_fetch_array($query))
{    
    $nofaktur = str_replace('.0000','',$row['NO_URUT']);
}

$sqls1 = "select * from cart where checkout_status = 0 ";
    $s2 = mysqli_query($conn,$sqls1);
    $totalrow = mysqli_num_rows($s2);

if (count==0) {
        $totalpost = 0;
      for($i = 0 ; i < $totalrow; $i++)
      {
          $iatpenjualan1= "INSERT INTO `IATPENJUALAN1` (No_Faktur, KODE_STOCK, NAMA_STOCK, QTY, SATUAN, HARGA_JUAL, DISCOUNT,DISCOUNT_NILAI, JUMLAH, PPN, KODE_PAJAK,KODE_DEPARTEMEN, KODE_PROYEK, HARGA_LIST, QTY_KECIL,KODE_GROUP, PRINT_ITEM, GROUP_PIL, NOMOR_SO,BONUS, SATUAN_BNS, QTY_KECIL_BNS, DO_HARGA_POKOK,NO_ITEM, NO_LOT, NOMOR_KS, PACKING, SATUAN_PACK, NO_SEND, SENDING, STATUS) VALUES ('$nofaktur','".$_POST['listdatakodestockyangdibon']."','".$_POST['listdatakodestockyangdibon']."','".$_POST['qtydibonperitem']."','".$_POST['sesuaisatuandibon']."','".$_POST['hargaperitemperbon']."','',0,0,0,'N','00','',0,1,'',1,'','',1,'',0,0,'".$_POST['urutandataposting']."','','',0,'','',0,'')";
          
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
            $datenaw = gmdate('Y-m-d h:i:s \G\M\T', time());
            $iatpenjualan = "INSERT INTO IAPPENJUALAN (NO_FAKTUR, KODE_LOKASI, KODE_CUSTOMER, TANGGAL, J_TEMPO, KODE_MATAUANG, KURS_TUKAR, KODE_SALESMAN,JUMLAH, JUMLAH_FAKTUR_RP, USER_ID, FAKTUR_DO, DN) VALUES
             ('".[' nofaktur ']."','web','CASH','".$datenaw."','".['carageneratedatenow']."','IDR',1,
             'web','".[' subtotalval ']."','".[' totalakhirval ']."','".$_SESSION['username']."',0,0)";
            
            $sql1  = mysqli_query($conn,$iatpenjualan);


                  if($sql1)
                  {
                    $iappenjualan =  "INSERT INTO IATPENJUALAN (No_Faktur, KODE_LOKASI, KODE_CUSTOMER, DIKIRIM_KE, TANGGAL, J_TEMPO, 
                    KODE_MATAUANG, KURS_TUKAR,KODE_EXPEDISI, KODE_SALESMAN, KETERANGAN, JUMLAH_FAKTUR, DISCOUNT_NILAI,JUMLAH_FAKTUR_RP, USER_ID,CARA_BAYAR) VALUES ('$nofaktur','web','CASH','-','".['GENERATETANGGALHARIINI']."'
                     ,'".['GENERATETANGGALHARIINI']."','IDR',1,'','CASH','','".[' subtotalfaktur ']."',0,'".[' totalakhirbon ']."',
                     '".$_SESSION[' generator.userlogin ']."','CASH')";
                    
                      $sql2  = mysqli_query($conn,$iappenjualan1);


                      if($sql2)
                      {
                          header("Location: ../payment.php");
                          exit();
                      }
                      else{
                          
                      }
                  }
                  else {
                    echo "error posting iatpenjualan1";
                  }

        }
    
    
  }



$iatpenjualan = "INSERT INTO IAPPENJUALAN (NO_FAKTUR, KODE_LOKASI, KODE_CUSTOMER, TANGGAL, J_TEMPO, KODE_MATAUANG, KURS_TUKAR, KODE_SALESMAN,JUMLAH, JUMLAH_FAKTUR_RP, USER_ID, FAKTUR_DO, DN) VALUES
 ('".[' nofaktur ']."','".[' lokasi ']."','".[' generator.satucust ']."','".[' generator.parsedate ']."','".[' generator.parsedate(generator.satutanggal, "4") ']."','IDR',1,
 '".[' getsalesmancode(generator.satukasir) ']."','".[' subtotalval ']."','".[' totalakhirval ']."','".[' generator.userlogin ']."',0,0)"
  $sql  = mysqli_query($conn,$query);


  if($sql)
  {
    echo "TRUE";
    header("Location: ../payment.php");
    exit();
  }
  else {
    echo "error 2";
  }
 ?>
