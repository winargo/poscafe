<?php
    session_start();

        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('..\..\..\config\db_connect.php');
        $result = mysqli_query($conn,$sql);


                $sql="delete from `iamabsence` where absence_id='".$_POST['absenceid']."'";


            if(mysqli_query($conn, $sql)){
                header("Location: ..\usermanagement.php");
                exit;
            }   
            else{
                $_SESSION['error1']= "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };

        mysqli_close($link);

?>