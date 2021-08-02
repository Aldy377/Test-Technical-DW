<?php
session_start();
include 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$pass = md5($password);

$query = mysqli_query($conn,"SELECT * FROM  user WHERE username = '$username' and password = '$pass' ");

$dd = mysqli_fetch_assoc($query);
$_SESSION['nama'] = $dd['nama'];
$_SESSION['level'] = $dd['level'];
$cek  = mysqli_num_rows($query);
if ($cek > 0){
	echo "
	<script language='javascript'>
	alert('Selamat Datang');
	window.location = 'admin/home.php';
	</script>
	";
}else{
	echo "
	<script language='javascript'>
	alert('Silahkan Coba Lagi');
	window.location = 'index.php';
	</script>
	";
	
}
?>