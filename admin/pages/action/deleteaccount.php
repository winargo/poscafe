<?php
    session_start();

        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('..\..\..\config\db_connect.php');
        $result = mysqli_query($conn,$sql);


                $sql="delete from `xuser` where user_id='".$_POST['username']."'";


            if(mysqli_query($conn, $sql)){
                header("Location: ..\usermanagement.php");
                exit;
            }   
            else{
                $_SESSION['ERROR']= "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };

        mysqli_close($link);

?>