
<?php
session_start();
include "../config/connection.php";


//$iatpenjualan = ""


//
//while ($row = mysqli_fetch_array($s1)) {
//    count++;
//  
//}

$sql = "select * from iatpenjualan where no_faktur='".$_POST['print']."'";
$query = mysqli_query($conn,$sql);
$nofaktur = "";
$total = 0;
$count = 0;

while($row = mysqli_fetch_array($query))
{    
    $count++;
    
}

if($count>=1){
    $sql = "update checkout set print='2' where order_number='".$_POST['print']."'";
              $query = mysqli_query($conn,$sql);
              if($query)
              {
                $_SESSION['print']=$_POST['print'];
                header("Location: ../print.php");
                exit();
              }
              else
              {
              $_SESSION['error1']=  $_SESSION['error']."<b style='color: red;'>ERROR: Could not able to execute $sql. " . mysqli_error($link)."</b>";
              header("Location: ../orders.php");
              exit();
              }
    
    
    
}
else{
    $_SESSION['print']="";
    $_SESSION['error1']=  $_SESSION['error']."<b style='color: red;'>Number is not Available</b>";
    header("Location: ../orders.php");
    exit();
}

?>

                
                
                           
                      