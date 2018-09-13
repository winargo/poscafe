<?php
    session_start();
   // include("../../config/blockadmin.php");
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('../../config/db_connect.php');
        $sql="";
        $absenceid=isset($_POST['absenceid']) ? $_POST['absenceid'] : '';
        $username=isset($_POST['absencename']) ? $_POST['absencename'] : '';
        $passcode=isset($_POST['passcode']) ? $_POST['passcode'] : '';
        $timeout=isset($_POST['timeout']) ? $_POST['timeout'] : '';
        $sql = "Select absence_id from `iamabsence` where absence_id='$absenceid'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else{
        $row = mysqli_fetch_array($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $row[0];
      if(($absenceid==$row[0] )/*===true*/) {
          $_SESSION['error1']="<b style='color: red;'>Absence Is already Registered</b>";
              header("Location: ../pages/usermanagement.php");
            exit;
      }else{
            //if($_POST['command']=="clear"){
             //   $sql="update `user` set password='' where username='".$_POST['username']."'";
            //}
                $sql="insert into `iamabsence` (absence_id,absence_name,absence_password,time_out,absence_createdate,user_id) values('$absenceid','$username','$passcode','$timeout',curdate(),'".$_SESSION['username']."')";
            //else{
               // $sql="delete from `user` where username='".$_POST['username']."'";
            //}
            if(mysqli_query($conn, $sql)){
                header("Location: ../pages/usermanagement.php");
                exit;
            }   
            else{
            $_SESSION['error1'] = "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                header("Location: ../pages/usermanagement.php");
            exit;
            };
        
        // Close connection
        mysqli_close($link);
        }
        }
        ?>
        <!--while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['employee_id'\]}</td>
              <td>{$row\['employee_name'\]}</td>
              <td>{$row\['employee_dob'\]}</td>
              <td>{$row\['employee_addr'\]}</td>
              <td>{$row\['employee_dept'\]}</td>
              <td>{$row\['employee_sal'\]}</td> 
            </tr>\n";
          }-->