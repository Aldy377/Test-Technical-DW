<?php
include '../../config/koneksi.php';

$ket = $_POST['keterangan'];


$sql = mysqli_query($conn, "INSERT INTO categories VALUES ('','$ket')");

if ($sql > 0){
	echo "
	<script language ='javascript'>
	alert ('Data Berhasil Disimpan');
	window.location ='../home.php?menu=3';
	</script>
	";
}else{
	echo "
	<script language ='javascript'>
	alert ('Data Gagal Disimpan');
	window.location ='../home.php?menu=3';
	</script>
	";
}
?>