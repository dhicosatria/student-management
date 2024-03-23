<?php 
include 'inc/koneksi.php';
error_reporting(0);


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Add service</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link rel="shorcut icon" type="image/png" href="assets/img/logoo.png" />
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
      <!-- navbar -->
      <?php include'inc/header.php'; ?>
        <!-- navbar end -->

    <main id="main" class="main">
    <div class="pagetitle">
      <h1>Tambah data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Student Management</a></li>
          <li class="breadcrumb-item active">Add student</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">
        <form action="./tambah-proses.php" method="post">

							 <div class="form-group">  Nama</label> <input type="varchar" class="form-control mt-1" id="nama" name="nama"  value="" required="true"> </div>
							 <div class="form-group">  NIM</label> <input type="text" class="form-control mt-1" id="NIM" name="NIM"  value="" required="true"> </div>
							 <div class="form-group mt-2"> Alamat</label> <textarea type="varchar" class="form-control mt-1" id="alamat" name="alamat"  value="" required="true"></textarea> </div>
							  <div class="form-group mt-2"> Tanggal lahir</label> <input type="date" id="tgllahir" name="tgllahir" class="form-control mt-1" value="" required="true"> </div>
                      <label for="gender">Gender</label><br>
                      <input type="radio" name="gender" id="male" value="male">
                      <label for="male">Male</label><br>
                      <input type="radio" name="gender" id="female" value="female">
                      <label for="female">Female</label><br>
  
                <div class="form-group"> <label for="exampleInputEmail1"> Usia</label> <input type="int" class="form-control mt-1" id="usia" name="usia"  value="" required="true"> </div>
							  <button type="submit" name="submit"id="create"class="btn btn-primary mt-2">Add</button>
                <a href="./admin.php"  class="btn btn-danger mt-2">Back</a>
                    </form> 
        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->

         <!-- Footer -->
      <?php include'inc/footer.php'; ?>
        <!-- Footer end -->
</body>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>
