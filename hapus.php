<?php 
include 'koneksi.php';
$id_users = $_GET['id_users'];// get mengambil id user yang ada di data
mysqli_query($koneksi,"DELETE FROM users WHERE id_users='$id_users'")or die(mysql_error());// untuk menghapus user berdasarkan id user nya
 
header("location:admin.php");
?>