<?php  
include('connect.php');

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $nohp = mysqli_real_escape_string($conn, $_POST['no_hp']);

    $query = mysqli_query($conn, "INSERT INTO user (username, password, email, no_hp) VALUES ('$username', '$password', '$email', '$nohp')");
    
    if ($query) {
        echo "<script>
                alert('Registrasi berhasil! Silakan login.');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>alert('Maaf, terjadi error.');</script>";
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
