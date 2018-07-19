
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

while($row = mysqli_fetch_array($query))
{    
    $_SESSION['print']=$row['NO_FAKTUR'];
    header("Location: ../print.php");
    exit();
}

?>

                
                
                           
                      