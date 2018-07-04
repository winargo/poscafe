<?php
date_default_timezone_set('Asia/Jakarta');
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database ="ias";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        ?>
