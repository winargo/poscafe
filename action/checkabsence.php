<?php
        session_start();
        include("../config/db_connect.php");
        $absence=isset($_POST['absence']) ? $_POST['absence'] : '';
        $absencepass=isset($_POST['password']) ? $_POST['password'] : '';
        $absencetype=isset($_POST['typeab']) ? $_POST['typeab'] : '';

        $sql = "Select absence_id from `iamabsence` where absence_id ='$absence' and absence_password='$absencepass'" ;

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
      if($row[0]==$absence)/*===true*/ {
          if($absencetype=="in"){
              $datenaw = date('Y-m-d');
                $sql = "select * from iatabsence where absence_id='$absence' and DATE_DATA='$datenaw'";
              echo $sql;
                $query = mysqli_query($conn,$sql);
                $nofaktur = "";
                $total = 0;
                $count = 0;

                while($row = mysqli_fetch_array($query))
                {    
                    $count++;

                }
              if($count==0){
                  $datenaw = date('Y-m-d');
                  $timenaw = date('h:i:s');
                  
                  $sql = "insert into iatabsence (absence_id,DATE_IN,DATE_DATA) values ('$absence','$timenaw','$datenaw')";
                  $query = mysqli_query($conn,$sql);
                  if($query)
                  {
                    $_SESSION["error"] = "<b style='color: green;'>Your Absence is Clocked in</b>";
                    header("Location: ../absence.php");
                    exit();
                  }
                  else
                  {
                  $_SESSION['error1']=  $_SESSION['error']."<b style='color: red;'>ERROR: Could not able to execute $sql. " . mysqli_error($link)."</b>";
                  header("Location: ../absence.php");
                  exit();
                  }
    
              }
              else{
                   $_SESSION["error"] = "<b style='color: red;'>Double Absence Is not Allowed</b>";
                   header ("Location: ../absence.php");
                   exit();
              }
          }
          else if($absencetype=="out"){
                $datenaw = date('Y-m-d');
                $sql = "select * from iatabsence where absence_id='$absence' and DATE_DATA='$datenaw'  ";
                echo $sql;
                $query = mysqli_query($conn,$sql);
                $nofaktur = "";
                $total = 0;
                $count = 0;

                while($row = mysqli_fetch_array($query))
                {    
                    $count++;

                }
              if($count!=0){
                  
                  $sqls1 = "select * from iatabsence where absence_id='$absence' and DATE_DATA='$datenaw' and finished =1 ";
                    $s2 = mysqli_query($conn,$sqls1);
                    $totalrow = mysqli_num_rows($s2);
                  
                    if($totalrow==1){
                        $_SESSION["error"] = "<b style='color: red;'>Your Absence is Clocked Out</b>";
                       header ("Location: ../absence.php");
                       exit();
                    }
                  else{
                      $datenaw = date('Y-m-d');
                      $timenaw = date('h:i:s');

                      $sql = "update iatabsence set DATE_OUT='$timenaw',finished=1 where absence_id='$absence' and DATE_DATA='$datenaw' ";
                      $query = mysqli_query($conn,$sql);
                      if($query)
                      {
                        $_SESSION["error"] = "<b style='color: green;'>Your Absence Has Been Clocked Out</b>";
                        header("Location: ../absence.php");
                        exit();
                      }
                      else
                      {
                      $_SESSION['error1']=  $_SESSION['error']."<b style='color: red;'>ERROR: Could not able to execute $sql. " . mysqli_error($link)."</b>";
                      header("Location: ../absence.php");
                      exit();
                      }
                  }
              }
              else{
                   $_SESSION["error"] = "<b style='color: red;'>Your Absence Wasn't Clocked In</b>";
                   header ("Location: ../absence.php");
                   exit();
              }
              
              
          }
          
          
          
          /*
          if($row['admin']==1){
              
              $sql = "update `xuser` set online=1 where user_id ='$username'";
            $result = mysqli_query($conn,$sql);
            if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            }
              
              header ("Location: ../orders.php");
          exit();
      }
     else {
         $_SESSION["error"] = "<b style='color: red;'>Your Username or Password is Incorrect</b>";
           header ("Location: ../index.php");
           exit();
       }*/
      }
            else{
                $_SESSION["error"] = "<b style='color: red;'>Invalid Absence ID or Passcode</b>";
                   header ("Location: ../absence.php");
                   exit();
                
            }
            
            }
?>
