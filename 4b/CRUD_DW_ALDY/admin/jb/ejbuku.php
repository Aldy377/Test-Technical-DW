<?php
include '../config/koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM categories WHERE id_jenis='$id'");
$tampil = mysqli_fetch_assoc($sql);
echo "";
?>

<div class="modal-body">
  <form action="jb/editjbuku.php" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Keterangan</label>
      <input type="hidden" name ="id" value="<?php echo $tampil['id_jenis']?>">
      <input type="text" class="form-control" name="nama_buku" value="<?php echo $tampil['kategori']?>">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary" >Tambah Data</button>
    </div>
  </div>
</form>
</div>
</div>