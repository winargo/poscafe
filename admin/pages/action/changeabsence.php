
<?php
    
        session_start();
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('..\..\..\config\db_connect.php');
        $sql="";
        $username=$_SESSION['tempuser'];
        $password=isset($_POST['password']) ? $_POST['password'] : '';
        $oldpassword=isset($_POST['old_password']) ? $_POST['old_password'] : '';
        $repassword=isset($_POST['re_password']) ? $_POST['re_password'] : '';
    
        echo $username;
        echo $password;
        $sql = "Select * from `iamabsence` where absence_id='$username'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else{
            $row = mysqli_fetch_array($result);
            
             if(($password!=$repassword)/*===true*/) {
                  $_SESSION['error']="<b style='color: red;'>Retype passcode Doesn't match</b>";
                  echo 'username';
                   header("Location: ../change_absence.php");
                   exit;
              }
            else{
                
                
                if($_POST['old_password']!=$row['absence_password']){
                $_SESSION['error']="<b style='color: red;'>Old Passcode Doesn't Match</b>";
                  header("Location: ../change_absence.php");
                  exit;
                }else{
                    $sql="update `iamabsence` set absence_password='$password' where absence_id='$username'";
                    if(mysqli_query($conn, $sql)){
                        $_SESSION['tempuser']=null;
                        header("Location: ../usermanagement.php");
                        exit;
                    }   
                    else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    };

                    // Close connection
                    mysqli_close($link);
                }
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