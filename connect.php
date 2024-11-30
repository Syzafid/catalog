<?php 
    if (!defined('SECURE_ACCESS')) {
        die('Direct access not permitted.');
    }
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "webuts";

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn){
        die("koneksi gagal: " . mysqli_connect_error());
    }

 ?>