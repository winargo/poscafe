<?php
session_start();
include "..\config\connection.php";

//Form data
$kodestock = $_POST['kodestock'];
$produkname = $_POST['produkname'];
//Query dari mysql untuk memanggil data di database
$cekcategory=mysqli_query($conn,"SELECT * FROM iamstock
					WHERE KODE_STOCK ='$kodestock'
					");
$ketemu=mysqli_num_rows($cekcategory);


if ($ketemu == 1){

    $sql = "delete from iamstock where KODE_STOCK='$kodestock'";
    $query = mysqli_query($conn,$sql);

    if($query)
    {
        $sql = "delete from cart where kode_stock='$produkname'";
          echo $sql;
          $query = mysqli_query($conn,$sql);
          if($query)
          {
              header("Location: ../viewmenu.php");
              exit();
          }
          else
          {
          $_SESSION['error']=  $_SESSION['error']."<b style='color: red;'>ERROR: Could not able to execute $sql. " . mysqli_error($query)."</b>";
          header("Location: ../viewmenu.php");
          exit();
          }
    }
    else{
        echo "gagal ";
    }
}else{

}


?>
