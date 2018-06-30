<?php

include "connection.php";
session_start();

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include('..\config\db_connect.php');
$data=isset($_POST['command']) ? $_POST['command'] : '';
$number=0;
if($data!=''){
    
    $sql = "select count(*)+1 as number from `iamstock`";
    $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else{
            $row=mysqli_fetch_array($result);
                $number=$row['number'];
                console_log( $number );
        }
    
$reportid="DR".(rand(0,9999999999999999999));
    console_log( $reportid );
$target_dir = "../uploads/";
    $real_dir = "./uploads/";
    $admin_dir="";
    console_log( $target_dir );
$target_file = $target_dir . basename($reportid.$_FILES["fileToUpload"]["name"]);
        console_log( $target_file );
$uploadOk = 1;
    console_log( $uploadOk );
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    console_log( $imageFileType );
    console_log( $_POST["submit"]);
    
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    console_log( "working" );
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $_SESSION['error']="File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $_SESSION['error']="File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['error']="Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    $_SESSION['error']="Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $_SESSION['error']="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
    console_log( $uploadOk );
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['error']="Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $number!=0) {
        $dir= basename( $reportid.$_FILES["fileToUpload"]["name"]);
         $_SESSION['error']=basename( $_FILES["fileToUpload"]["name"]);
        $temp=$real_dir.$dir;
        $admin_dir= $target_file;
        $_SESSION['error']="The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $userid = $_SESSION["usernamedb"];
//Form data
        $produkcode = $_POST['produkcode'];
        $produkname = $_POST['produkname'];
        $produkcategory = $_POST['produkcategory'];
        $kodedep = $_POST['kodedepartemen'];
        $selcate = $_POST['selcate'];

        //Query dari mysql untuk memanggil data di database
        $cekmenu=mysqli_query($conn,"SELECT * FROM iamstock
                            WHERE NAMA_PRODUK ='$produkname'
                            ");
        $ketemu=mysqli_num_rows($cekmenu);

        if ($ketemu == 0){

            $sql = "insert into iamstock (KODE_STOCK,NAMA_STOCK,,KODE_TYPE,KODE_PRODUK,IMAGEDIR,KEMAS1,SALDOAWAL,USER_ID) values ('$produkcode','$produkname','Stock','$produkcategory','$temp','$produkunit','$produkname','$userid','$kodedep','$selcate')";
            $query = mysqli_query($conn,$sql);

            if($query)
            {
                header("Location: ../orders.php");
                exit;
            }
            else
            {
            $_SESSION['error']="ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
        }
        // Close connection
        mysqli_close($link);
    } else {
        $_SESSION['error']="Sorry, there was an error uploading your file.";
    }
}
}else{
    
}

//get session user



?>