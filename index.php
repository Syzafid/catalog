<?php
define('SECURE_ACCESS', true);
include('connect.php');
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        header("Location: card.php");
        exit();
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="style.css">  
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-5" id="login-image-container">
                <img src="gambar/login.jpg" alt="" id="login-image">
            </div>
            <div class="col col-lg-5" id="login-form">
                <div class="col-lg-12 mt-5">
                    <h2>Welcome Back to TRPL 23</h2>
                    <p>Don't have an Account? <a href="regis.php">Register here!!</a></p>
                    <form action="" method="post">
                        <label for="username"><b>Username</b></label><br>
                        <input type="text" placeholder="Enter Username" name="username" required>
                        <label for="password"><b>Password</b></label><br>
                        <input type="password" placeholder="Enter Password" name="password" required>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button><br>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </form>
                    <h6 class="text-center">-- or Login with --</h6>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-outline-primary mx-2">
                            <i class="fab fa-google fa-2x"></i>
                        </a>
                        <a href="#" class="btn btn-outline-primary mx-2">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="#" class="btn btn-outline-primary mx-2">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
