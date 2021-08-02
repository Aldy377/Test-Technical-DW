<?php

include '../../config/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['name'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['category_id'];
$foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

$foto2 = $_FILES['foto2']['name'];
$tmp_foto2 = $_FILES['foto2']['tmp_name'];


$fotobaru = date('dmY').$foto;
$path = "foto/".$fotobaru;

$fotobaru2 = date('dmY').$foto2;
$path2 = "foto/".$fotobaru2;

if (move_uploaded_file($tmp_foto, $path)&&(
	move_uploaded_file($tmp_foto2, $path2))) {
	

	$inbr = "INSERT INTO books VALUES ('','$nama','$deskripsi','$stok','$kategori','$fotobaru','$fotobaru2')";
	if (mysqli_query($bebas, $inbr)) {
		for ($i=1; $i <= $stok ; $i++) { 
			$depan = sprintf("%03d",$i);
			$kode = $nama.'.'.$depan;
			echo "
			<script language='javascript'>
			alert('Data Berhasil Di Simpan');
			window.location = '../home.php?menu=1';
			</script>
			";
		}
		$er = mysqli_error();
		echo "$er";
//	}else{
//		echo "
	//	<script language='javascript'>
//		alert('Data Gagal Di Tambahkan');
//		window.location = '../home.php?menu=1';
	//	</script>
//		";
	}
}
?>