<?php 
    include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav>
        <div class="container flex">
            <div class="navigation flex">
                <div class="logo">
                    <img src="assets/images/logo.jpg" alt="">
                </div>
                <ul class="flex">
                    <li><a href="http://localhost/votingsystem/" class="t-white">Home</a></li>
                    <li><a href="http://localhost/votingsystem/#aboutus" class="t-white">About</a></li>
                    <li><a href="" class="t-white">Contact us</a></li>
                </ul>
            </div>

            <div class="nav-btns">
                <button href="login.php" id="login-btn" class="btn btn-login t-white btn-2490">Login</button>
                <a href="registration.php" class="btn btn-register t-white">Register</a>
            </div>
        </div>
    </nav>
    <div style="height: 80px;"><!-- add this spacer div due to fixed position of nav --></div>

