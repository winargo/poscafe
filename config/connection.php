<?php
date_default_timezone_set('Asia/Jakarta');
// Koneksi dan memilih database di server
$conn = mysqli_connect("localhost","root","") or die(mysqli_error());
$db   = mysqli_select_db($conn,"ias") or die ("DB Error");
?>