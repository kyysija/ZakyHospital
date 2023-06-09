<?php 
include 'koneksi.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];
 
mysqli_query($koneksi,"INSERT INTO users VALUES('','$username','$email','$password','$level')");
 
header("location:admin.php");
?>