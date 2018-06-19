<?php
        if(!isset($_SESSION["useradmin"]) || $_SESSION["useradmin"]==""){
          header ("Location: index.php");
          exit();
        }

        ?>
