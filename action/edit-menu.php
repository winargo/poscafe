<?php
session_start();
include "..\config\connection.php";

//Form data
$temp = $_POST['kodestock'];
$categorycode = $_POST['selcate'];
$categoryname = $_POST['categoryname'];
$extra1 = $_POST['extra1'];
$extra2 = $_POST['extra2'];
//Query dari mysql untuk memanggil data di database

$cekcategory=mysqli_query($conn,"SELECT * FROM iamstock
					WHERE kode_produk ='$temp'
					");
$ketemu=mysqli_num_rows($cekcategory);
echo $ketemu;


if ($ketemu == 0 ){
  $_SESSION['error']="<b style='color: red;'>Data Missing Please Reload</b>";
        header ("Location: ..\viewmenu.php");
        exit();
}
else if($ketemu ==1 ){
    if($temp==$categorycode){
        $sql = "update `iamproduk` set kode_produk= '$categorycode',nama_produk = '$categoryname',nama_sub_produk = '$extra1',nama_sub_produk2 = '$extra2' where kode_produk = '$temp'";
        $query = mysqli_query($conn,$sql);

        if($query)
        {
            header ("Location: ..\viewmenu.php");
            exit();
        }
    }
    else{
        $cekcategory1=mysqli_query($conn,"SELECT * FROM `iamproduk`
                        WHERE kode_produk ='$categorycode'
                        ");
        $ketemu1=mysqli_num_rows($cekcategory1);
        echo $ketemu1;

        if(ketemu1==1){
            $_SESSION['error']="<b style='color: red;'>Duplicate Data registered Please Recheck</b>";
            header ("Location: ..\viewmenu.php");
            exit();

        }
        else if($ketemu1==0){
            $sql = "update `iamproduk` set kode_produk= '$categorycode',nama_produk = '$categoryname',nama_sub_produk = '$extra1',nama_sub_produk2 = '$extra2' where kode_produk = '$temp'";
        $query = mysqli_query($conn,$sql);

        if($query)
        {
            header ("Location: ..\viewmenu.php");
            exit();
        }
        }
        else{
            $_SESSION['error']="<b style='color: red;'>Another Same Data Registered</b>";
            header ("Location: ..\viewmenu.php");
            exit();

        }
    }

}



?>
