<?php

include "../config/connection.php";


$kodestock = $_POST['kodestock'];
$sql = "DELETE FROM cart WHERE KODE_STOCK = '$kodestock'";

$query = mysqli_query($conn,$sql);

if($query)
{
    header("Location: ../orders.php");
    exit();
}
else{
    header("Location: ../orders.php");
    exit();
}

    
?>