<?php 
 
include 'koneksi.php';
$id_users = $_POST['id_users'];
$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];
 
mysqli_query($koneksi,"UPDATE users SET username='$username', email='$email', password='$password' WHERE id_users='$id_users'");
 
header("location:admin.php");
 
?>