<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="pasien"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pasien";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard.php");
 

 
	}else{
 
		// alihkan ke halaman login kembali
		echo "<div class='form'>
		<h3>Incorrect Username/password.</h3><br/>
		<p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
		</div>";
	}	
}else{
	echo "<div class='form'>
	<h3>Incorrect Username/password.</h3><br/>
	<p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
	</div>";
}
 
?>


