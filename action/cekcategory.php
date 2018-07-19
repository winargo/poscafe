<?php
<?php
session_start();
include "..\config\connection.php";

//Form data
$categorycode = $_POST['categorycode'];
$categoryname = $_POST['categoryname'];
$extra1 = $_POST['extra1'];
$extra2 = $_POST['extra2'];

//Query dari mysql untuk memanggil data di database
$cekcategory=mysqli_query($conn,"SELECT * FROM `iamproduk`
					WHERE KODE_PRODUK ='$categorycode'
					");
$ketemu=mysqli_num_rows($cekcategory);


if ($ketemu == 0){
  
    $sql = "insert into iamproduk (kode_produk,nama_produk,nama_sub_produk,nama_sub_produk2,user_id) values ('$categorycode','$categoryname','$extra1','$extra2','".$_SESSION['username']."')";
    $query = mysqli_query($conn,$sql);
    
    if($query)
    {
        header ("Location: ..\category.php");
        exit();
    }
}else{
    $_SESSION['error']="<b style='color: red;'>Duplicate Data registered Please Recheck</b>";
    header ("Location: ..\category.php");
    exit();
}

?>