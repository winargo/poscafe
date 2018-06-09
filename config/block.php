<?php
        if(!isset($_SESSION["user"]) || $_SESSION["user"]=="" || !isset($_SESSION["admin"]) || $_SESSION["admin"]==""){
          header ("Location: login.php");
          exit();
        }

        ?>
