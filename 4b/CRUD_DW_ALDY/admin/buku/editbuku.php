<?php
include '../../config/koneksi.php';

$id = $_POST['id'];
$name = $_POST['name'];
$jumlah = $_POST['stok'];
$kategori = $_POST['kategori'];

$sql = "SELECT * FROM books WHERE id_buku='$id'";
$eks = mysqli_query($conn, $sql);
$tamp = mysqli_fetch_assoc($eks);
$stok = $tamp['stok'];

$update = "UPDATE books set judul_buku = '$name', stok = '$jumlah', kategori = '$kategori' WHERE id_buku = '$id'";
if (mysqli_query($conn, $update)) {
	if ($stok < $jumlah) {
		for ($i=$stok; $i < $jumlah ; $i++) { 
			$depan = sprintf("%03d",$i);
			$kode = $name.'.'.$depan;
			$inde = "INSERT INTO detail_barang VALUES ('$kode','$id','penempatan','BAIK','ADA')";
			mysqli_query($bebas, $inde);
			
		}
	}else{
	}
	echo "
	<script language='javascript'>
	alert('Data Barang Berhasil Di Rubah');
	window.location = '../home.php?menu=1';
	</script>
	";
}else{
	echo "
	<script language='javascript'>
	alert('Data Barang Gagal Di Rubah');
	window.location = '../home.php?menu=1';
	</script>
	";
}
?>