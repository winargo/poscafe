<?php

include "connection.php";

//Form data
$categorycode = $_POST['categorycode'];
$categoryname = $_POST['categoryname'];
$extra1 = $_POST['extra1'];
$extra2 = $_POST['extra2'];

//Query dari mysql untuk memanggil data di database
$cekcategory=mysqli_query($conn,"SELECT * FROM category
					WHERE category_code ='$categorycode'
					");
$ketemu=mysqli_num_rows($cekcategory);

if ($ketemu == 0){
  
    $sql = "insert into category (category_code,category_name,extra_category_1,extra_category_2) values ('$categorycode','$categoryname','$extra1','$extra2')";
    $query = mysqli_query($conn,$sql);
    
    if($query)
    {
        echo "<script>window.location=('category.php');</script>";    
    }
    
    
        
  
}


?>