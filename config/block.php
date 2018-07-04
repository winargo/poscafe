<?php
date_default_timezone_set('Asia/Jakarta');
        if(!isset($_SESSION["username"]) || $_SESSION["username"]==""){
          if(!isset($_SESSION["usernamedb"]) || $_SESSION["usernamedb"]==""){
            header ("Location: .\index.php");
          exit();
          }
        }

        ?>
