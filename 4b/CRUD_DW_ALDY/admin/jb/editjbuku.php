<?php
include '../../config/koneksi.php';

$id = $_POST['id'];
$ket = $_POST['nama_buku'];


$sql = mysqli_query($conn, "UPDATE categories SET nama_buku = '$ket' WHERE id_jenis ='$id'");

if ($sql > 0){
	echo "
	<script language ='javascript'>
	alert ('Data Berhasil Dirubah');
	window.location ='../home.php?menu=3';
	</script>
	";
}else{
	echo "
	<script language ='javascript'>
	alert ('Ada Kesalahan Perubahan Data');
	window.location ='../home.php?menu=3';
	</script>
	";
}
?>