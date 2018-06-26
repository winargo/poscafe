<?php
        if(!isset($_SESSION["username"]) || $_SESSION["username"]==""){
          if(!isset($_SESSION["usernamedb"]) || $_SESSION["usernamedb"]==""){
            header ("Location: .\index.php");
          exit();
          }
        }

        ?>
