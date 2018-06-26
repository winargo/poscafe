<?php
        session_start();
        include("..\config\db_connect.php");
        $user=$_SESSION['username'];
        $sql = "update `xuser` set online='0' where user_id='$user' ";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
        {
            $_SESSION["usernamedb"]="";
            $_SESSION["admin"] = 0;
            $_SESSION["username"]="";
        header ("Location: ..\index.php");
          exit();
      }
?>