<?php
include '../config/koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM books WHERE id_buku='$id'");
$tampil = mysqli_fetch_assoc($sql);
echo "";
?>

<div class="modal-body">
  <form action="buku/editbuku.php" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Judul Buku</label>
      <input type="hidden" name ="id" value="<?php echo $tampil['id_buku']?>">
      <input type="text" class="form-control" name="name" value="<?php echo $tampil['name']?>">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Stok</label>
      <input type="number" class="form-control" name="stok" value="<?php echo $tampil['stok']?>">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Kategori</label>
      <input type="hidden" name ="id" value="<?php echo $tampil['id_buku']?>">
      <input type="text" class="form-control" name="kategori" value="<?php echo $tampil['category_id']?>">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary" >Edit Data</button>
    </div>
  </div>
</form>
</div>
</div>