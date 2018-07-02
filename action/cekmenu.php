<?php


function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include('..\config\db_connect.php');
$data=isset($_POST['produkcode']) ? $_POST['produkcode'] : '';
$number=0;
$temp = '';
$reportid='';
$real_dir='';

$dir = basename($reportid.$_FILES["fileToUpload"]["name"]);
$temp = $real_dir.$dir;
//Form data
$produkcode = $_POST['produkcode'];
$produkname = $_POST['produkname'];
$produkunit = $_POST['produkunit'];
$produkprice = $_POST['produkprice'];
$produkcategory = $_POST['selcate'];
$kodedep = $_POST['kodedepartemen'];
$selcate = $_POST['selcate'];

$cekmenu=mysqli_query($conn,"SELECT * FROM iamstock
                            WHERE KODE_STOCK ='$produkcode'
                            ");
        $ketemu=mysqli_num_rows($cekmenu);

        if ($ketemu == 0){
            
            
if($data!=''){

                $number=1;

$reportid="ER".(rand(00000000,99999999));
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
if(isset($_POST["submit"]) && isset($_FILES['file'])) {
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
if ($_FILES["fileToUpload"]["size"] > 50000000) {
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
    echo "data is not empty";
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $number!=0) {
        $dir= basename( $reportid.$_FILES["fileToUpload"]["name"]);
         $_SESSION['error']=basename( $_FILES["fileToUpload"]["name"]);
        $temp=$real_dir.$dir;
        $admin_dir= $target_file;
        $_SESSION['error']="The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        
          $sqls = "select NAMA_SUB_PRODUK, NAMA_SUB_PRODUK2 from iamproduk where KODE_PRODUK = '$produkcategory'";
          $querys = mysqli_query($conn,$sqls);
          while ($row = mysqli_fetch_array($querys)) {
              $sql = "insert into iamstock (KODE_STOCK,NAMA_STOCK,KODE_TYPE,KODE_PRODUK,HARGAJUAL1,IMAGEDIR,KEMAS1,SALDOAWAL,USER_ID,NAMA_SUB_PRODUK,NAMA_SUB_PRODUK2) values ('$produkcode','$produkname','Stock','$produkcategory',$produkprice,'$temp','$produkunit',0,'".$_SESSION['username']."','".$row["NAMA_SUB_PRODUK"]."','".$row["NAMA_SUB_PRODUK2"]."')";
              echo $sql;
              $query = mysqli_query($conn,$sql);
              if($query)
              {
                echo $sql;
                  header("Location: ../orders.php");
                  exit();
              }
              else
              {
              $_SESSION['error']=  $_SESSION['error']."<b style='color: red;'>ERROR: Could not able to execute $sql. " . mysqli_error($link)."</b>";
              header("Location: ../orders.php");
              exit();
              }
          }

          // if($query)
          // {
          //     header("Location: ../orders.php");
          //     exit();
          // }
          // else
          // {
          // $_SESSION['error']=  $_SESSION['error']."<b style='color: red;'>ERROR: Could not able to execute $sql. " . mysqli_error($link)."</b>";
          // header("Location: ../orders.php");
          // exit();
          // }

          // Close connection
        
      }
    }
  }

            }else {
            
            $_SESSION['error']=  $_SESSION['error']."<b style='color: red;'>ERROR: Duplicate Data Detected</b>";
              header("Location: ../orders.php");
              exit();
        }

?>
