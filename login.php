<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <form class="form" method="post" name="login" action="cek_login.php"><!--fungsi form utk mengirim ke proses selanjutnya -->
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/><!--name dalam baris ini menjelaskan tentang identifikasi data yg mau digunakan -->
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>
<?php
    
?>
</body>
</html>
