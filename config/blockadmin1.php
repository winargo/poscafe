<?php
date_default_timezone_set('Asia/Jakarta');
        if(!isset($_SESSION["admin"]) || $_SESSION["admin"]==0){
          header ("Location: ..\..index.php");
          exit();
        }

        ?>
