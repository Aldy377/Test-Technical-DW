<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>
              <?php 
              $buku = mysqli_query($conn, "SELECT COUNT(*) FROM books");
              $anjay = mysqli_fetch_array($buku);
              ?>
              <?php
              echo "$anjay[0]";
              ?>              
              <sup style="font-size: 20px">%</sup></h3>

            <p>DATA BUKU</p>
          </div>
          <div class="icon">
            <i class="fa fa-book" aria-hidden="true"></i>
          </div>
          <a href="home.php?menu=3" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>
              <?php 
              $categories = mysqli_query($conn, "SELECT COUNT(*) FROM categories");
              $anjay = mysqli_fetch_array($categories);
              ?>
              <?php
              echo "$anjay[0]";
              ?>
            </h3>

            <p>DATA JENIS BUKU</p>
          </div>
          <div class="icon">
            <i class="fa fa-bookmark" aria-hidden="true"></i>
          </div>
          <a href="home.php?menu=5" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      