<?php
define('SECURE_ACCESS', true);
include('connect.php');

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $passwordEncrypt = password_hash($password, PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $nohp = mysqli_real_escape_string($conn, $_POST['no_hp']);

    if (!preg_match('/^08[0-9]{10,11}$/', $nohp)) {
        echo "<script>alert('Nomor HP tidak valid! Nomor harus dimulai dengan 08 dan memiliki 12 atau 13 digit.');</script>";
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid!');</script>";
    } 
    else {
        $cekEmailQuery = "SELECT * FROM user WHERE email = '$email'";
        $cekEmailResult = mysqli_query($conn, $cekEmailQuery);
        $cekNoHpQuery = "SELECT * FROM user WHERE no_hp = '$nohp'";
        $cekNoHpResult = mysqli_query($conn, $cekNoHpQuery);

        if (mysqli_num_rows($cekEmailResult) > 0) {
            echo "<script>alert('Email sudah terdaftar! Silakan gunakan email lain.');</script>";
        } elseif (mysqli_num_rows($cekNoHpResult) > 0) {
            echo "<script>alert('Nomor HP sudah terdaftar! Silakan gunakan nomor lain.');</script>";
        } else {
            $query = mysqli_query($conn, "INSERT INTO user (username, password, email, no_hp) VALUES ('$username', '$passwordEncrypt', '$email', '$nohp')");
            
            if ($query) {
                echo "<script>
                        alert('Registrasi berhasil! Silakan login.');
                        window.location.href = 'index.php';
                      </script>";
            } else {
                echo "<script>alert('Maaf, terjadi error saat registrasi.');</script>";
            }
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">  
<title>Register</title>
</head>
<body style="background-color: #000000;">
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-lg-5" id="regis-form">
            <div class="col-lg-12 mt-5">
                <h2>Welcome to TRPL 23</h2>
                <p>Already have an Account? <a href="index.php">Login here!!</a></p>
                
                <form action="" method="POST">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>
                    <label for="no_hp"><b>No HP</b></label>
                    <input type="text" placeholder="Enter Phone Number" name="no_hp" required>
                    
                    
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    
                    
                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </form>
            </div>
        </div>
        <div class="col col-lg-5" id="login-image-container">
            <img src="gambar/regis.jpg" alt="" id="regis-image">
        </div>
    </div>
</div>

</body>
</html>
