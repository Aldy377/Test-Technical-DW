<?php 
include 'config/koneksi.php';


 ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> <marquee> DATA BUKU </marquee></h3><br>
            <!-- Button trigger modal -->
            <button class="btn btn-outline-dark"><a href="login/index.html"> LOGIN</a> </button>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>JUDUL BUKU</th>
                  <th>STOK</th>
                  <th>KATEGORI</th>
                  <th>FOTO</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM books";
                $query = mysqli_query($conn, $sql);
                while ($tampil = mysqli_fetch_assoc($query)) {
                  ?>
                  <tr>
                    <td><?php echo $tampil['id_buku']?></td>
                    <td><?php echo $tampil['name']?></td>
                    <td><?php echo $tampil['deskripsi']?></td>
                    <td><?php echo $tampil['category_id']?></td>  
                    <td><img src="admin/buku/foto/<?php echo $tampil['foto']?>" width="150" height = "100"></td>
                    <td>
                      <a href="#" target="_blank"  class="btn btn-outline-dark">Pinjam</a>                 
                      <a href="#" target="_blank"  class="btn btn-outline-dark">Kembalikan</a>
                      <a href="admin/buku/foto/<?php echo $tampil['file']?>" target="_blank"  class="btn btn-outline-dark">Download</a> 
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>