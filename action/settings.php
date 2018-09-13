<?php
        session_start();
        include("..\config\db_connect.php");
        $user=$_SESSION['username'];
        $sql = "update `xparam` set nilai_param='".$_POST['lokasi']."' where NAMA_PARAM='LOKASI' ";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
        {
          header ("Location: ../index.php");
          exit();
      }
?>