<?php
include '../../config/koneksi.php';

$id = $_GET['id'];

$sql = (mysqli_query($conn, "DELETE FROM categories WHERE id_jenis='$id'"));

if ($sql > 0) {
	echo "
	<script language='javascript'>
	alert('Data Berhasil Di Hapus');
	window.location = '../home.php?menu=3';
	</script>
	";
}else{
	echo "
	<script language='javascript'>
	alert('Data Gagal Di Hapus');
	window.location = '../home.php?menu=3';
	</script>
	";
}
?>