<?php 
 session_start();
 include "config/koneksi.php";
 if ( !isset($_SESSION["login"]) ) {
   header("Location: ./login/login.php");
   exit;
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <!-- Header -->
  <?php include "layout/header.php";?>
  <!-- End Header -->
<body class="hold-transition sidebar-mini layout-fixed">
 <div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Aplikasi P5</a>
      </li>
    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <?php include "layout/sidebar.php"; ?>
  <?php include "config/page.php";?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
  <?php include "layout/script.php";?>
</body>
</html>
