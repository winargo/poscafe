<?php
session_start();
include "..\config\connection.php";

//Form data
$categorycode = $_POST['productcode'];
$categoryname = $_POST['categoryname'];
$extra1 = $_POST['extra1'];
$extra2 = $_POST['extra2'];

//Query dari mysql untuk memanggil data di database
$cekcategory=mysqli_query($conn,"SELECT * FROM iamproduk
					WHERE category_code ='$categorycode'
					");
$ketemu=mysqli_num_rows($cekcategory);


if ($ketemu == 0){
  
    $sql = "delete from iamproduk where KODE_PRODUK='$categorycode'";
    $query = mysqli_query($conn,$sql);
    
    if($query)
    {
        header ("Location: ..\category.php");
        exit();
    }
}else{
    
}


?>