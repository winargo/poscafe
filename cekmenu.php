<?php

include "connection.php";
session_start();

//get session user

$userid = $_SESSION["usernamedb"];
//Form data
$produkcode = $_POST['produkcode'];
$produkname = $_POST['produkname'];
$kodedep = $_POST['kodedepartemen'];

//Query dari mysql untuk memanggil data di database
$cekmenu=mysqli_query($conn,"SELECT * FROM iamproduk
					WHERE NAMA_PRODUK ='$produkname'
					");
$ketemu=mysqli_num_rows($cekmenu);

if ($ketemu == 0){
  
    $sql = "insert into iamproduk (KODE_PRODUK,NAMA_PRODUK,NAMA_SUB_PRODUK,NAMA_SUB_PRODUK2,USER_ID,KODE_DEPT) values ('$produkcode','$produkname','$produkname','$produkname','$userid','$kodedep')";
    $query = mysqli_query($conn,$sql);
    
    if($query)
    {
        echo "<script>window.location=('orders.php');</script>";    
    }
}

?>