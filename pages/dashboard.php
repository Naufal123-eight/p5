<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <?php 
          if ($_SESSION ['level'] == "Admin") {
          ?>
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
              include "./config/koneksi.php";
              $data_siswa = mysqli_query($koneksi, "SELECT * FROM murid");
              $jumlah_siswa = mysqli_num_rows($data_siswa);
              ?>
                <h3><?php echo $jumlah_siswa;?></h3>

                <p>Data Pasien</p>
              </div>
              <div class="icon">
              <i class="ion ion-person"></i>
              </div>
              <a href="./index.php?page=data_siswa" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>  
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php 
              include "./config/koneksi.php";
              $data_petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
              $jumlah_petugas = mysqli_num_rows($data_petugas);
              ?>
                <h3><?php echo $jumlah_petugas;?></h3>

                <p>Data Petugas</p>
              </div>
              <div class="icon">
              <i class="ion ion-person"></i>
              </div>
              <a href="./index.php?page=data_petugas" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>  
          <?php }?>
          <?php 
          if ($_SESSION['level'] == "Petugas Registrasi") {
          ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
              include "./config/koneksi.php";
              $data_siswa = mysqli_query($koneksi, "SELECT * FROM murid");
              $jumlah_siswa = mysqli_num_rows($data_siswa);
              ?>
                <h3><?php echo $jumlah_siswa;?></h3>

                <p>Data Pasien</p>
              </div>
              <div class="icon">
              <i class="ion ion-person"></i>
              </div>
              <a href="./index.php?page=data_siswa" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <?php }?>
          <?php 
          if ($_SESSION['level'] == "Petugas Pendataan") {
          ?>       
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php 
              include "./config/koneksi.php";
              $data_pendataan = mysqli_query($koneksi, "SELECT * FROM pendataan");
              $jumlah_pendataan = mysqli_num_rows($data_pendataan);
              ?>
                <h3><?php echo $jumlah_pendataan;?></h3>

                <p>Pendataan Kesehatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="./index.php?page=data_pendataan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php }?>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>