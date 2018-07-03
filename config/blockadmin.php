<?php
date_default_timezone_set('Asia/Jakarta');
        if(!isset($_SESSION["useradmin"]) || $_SESSION["useradmin"]==""){
          header ("Location: index.php");
          exit();
        }

        ?>
