<?php
include '../config/koneksi.php';
function autonumber($tabel, $kolom, $lebar=0, $awalan='')
{
  $conn=mysqli_connect("localhost", "root", "", "dbperpus");
  $query="select $kolom from $tabel order by $kolom desc limit 1";
  $hasil=mysqli_query($conn, $query);
  $jumlahrecord = mysqli_num_rows($hasil);
  if($jumlahrecord == 0)
    $nomor=1;
  else
  {
    $row=mysqli_fetch_array($hasil);
    $nomor=intval(substr($row[0],strlen($awalan)))+1;
  }
  if($lebar>0)
    $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
  else
    $angka = $awalan.$nomor;
  return $angka;
}
?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Buku</h3><br>
            <!-- Button trigger modal -->
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-address-card" aria-hidden="true">
              Tambah Data
            </i></button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>KETERANGAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM categories";
                $query = mysqli_query($conn, $sql);
                while ($tampil = mysqli_fetch_assoc($query)) {
                  ?>
                  <tr>
                    <td><?php echo $tampil['id_jenis']?></td>
                    <td><?php echo $tampil['kategori']?></td>
                    <td>
                      <a href="home.php?menu=4&id=<?php echo $tampil['id_jenis']?>" class="btn btn-outline-dark"><i class="fa fa-pencil-alt"></i></a> |
                      <a href="jb/hjbuku.php?id=<?php echo $tampil['id_jenis']?>" class="btn btn-outline-dark" onclick="return confirm('Yakin data akan dihapus?')"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php
                }
                ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="jb/tjbuku.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">

          </div>
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo autonumber('buku','id_buku',0,'') ?>">
            <label for="exampleInputEmail1">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" required="">
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" >Tambah Data</button>
        </div>
      </div>
    </form>
  </div>
</div>