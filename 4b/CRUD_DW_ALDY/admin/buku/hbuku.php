<?php
include '../../config/koneksi.php';

$id = $_GET['id'];

$sql = (mysqli_query($conn, "DELETE FROM books WHERE id_buku='$id'"));

if ($sql > 0) {
	echo "
	<script language='javascript'>
	alert('Data Berhasil Di Hapus');
	window.location = '../home.php?menu=1';
	</script>
	";
}else{
	echo "
	<script language='javascript'>
	alert('Data Gagal Di Hapus');
	window.location = '../home.php?menu=1';
	</script>
	";
}
?>