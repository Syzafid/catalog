<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "webuts";

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn){
        die("koneksi gagal: " . mysqli_connect_error());
    }

 ?>