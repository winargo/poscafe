<?php
        session_start();
        include("../config/db_connect.php");
        $username=isset($_POST['username']) ? $_POST['username'] : '';
        $password=isset($_POST['password']) ? $_POST['password'] : '';

        $sql = "Select password,admin from `xuser` where user_id ='$username'" ;

        echo $username;
        echo $password;
        echo $sql;

        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else{
        $row = mysqli_fetch_array($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if((md5($password)==$row[0])/*===true*/) {
          if($row['admin']==1){
              $sql = "update `xuser` set online=1 where user_id ='$username'";
            $result = mysqli_query($conn,$sql);
            if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            }
              $_SESSION["username"] = $username;
              $_SESSION["admin"] = 1;
              header ("Location: order.php");
           }
          else{
              $sql = "update `xuser` set online=1 where user_id ='$username'";
            $result = mysqli_query($conn,$sql);
            if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
          }else {
            $_SESSION["username"] = $username;
            header ("Location: ..\order.php");
            }
          }
          exit();
      }
     else {
         $_SESSION["error"] = "<b style='color: red;'>Your Username or Password is Incorrect</b>";
           header ("Location: ..\index.php");

       }
      }
?>
