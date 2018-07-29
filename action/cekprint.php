
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
    $_SESSION['print']=$row['NO_FAKTUR'];
    header("Location: ../print.php");
    exit();
}
else{
    $_SESSION['print']="";
    header("Location: ../orders.php");
    exit();
}

?>

                
                
                           
                      