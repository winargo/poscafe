<?php
        if(!isset($_SESSION["username"]) || $_SESSION["username"]==""){
          header ("Location: login.php");
          exit();
        }

        ?>
