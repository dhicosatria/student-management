<?php 
include 'inc/koneksi.php';
error_reporting(0);


          if(isset($_POST['submit']))
            {
              $addnama = $_POST['nama'];
              $addNIM = $_POST['NIM'];
              $addalamat = $_POST['alamat'];
              $addtgl = $_POST['tgllahir'];
              $addgender = $_POST['gender'];
              $addusia = $_POST['usia'];

              $query=mysqli_query($conn, "update  users set nama='$addnama',NIM='$addNIM',alamat='$addalamat',tgllahir='$addtgl',gender='$addgender',usia='$addusia' where NIM='$addNIM' ");
              if ($query) {
              echo "<script>alert('Data has been Updated.');
              location.href = 'admin.php';</script>";
            }
            else
              { 
                echo "<script>alert('Something Went Wrong. Please try again.');</script>";
              }
          }

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
      <h1>Update data</h1>
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
        <form action="" method="post">
                    <?php
              $cid=$_GET['NIM'];
              $ret=mysqli_query($conn,"select * from  users where NIM='$cid'");
              $cnt=1;
              while ($row=mysqli_fetch_array($ret)) {
              ?> 
           

              <div class="form-group">  Nama</label> <input type="varchar" class="form-control mt-1" id="nama" name="nama"  value="<?php  echo $row['nama'];?>" required="true"> </div>
							 <div class="form-group">  NIM</label> <input type="text" class="form-control mt-1" id="NIM" name="NIM"  value="<?php  echo $row['NIM'];?>" readonly="true"> </div>
							 <div class="form-group mt-2"> Alamat</label> <textarea type="varchar" class="form-control mt-1" id="alamat" name="alamat"  value="" required="true"><?php  echo $row['alamat'];?></textarea> </div>
							  <div class="form-group mt-2"> Tanggal lahir</label> <input type="date" id="tgllahir" name="tgllahir" class="form-control mt-1" value="<?php  echo $row['tgllahir'];?>" required="true"> </div>
                <div class="form-group mt-2">Gender </label>   <br>
                      <label for="gender">Gender</label><br>
                      <input type="radio" name="gender" id="male" value="male">
                      <label for="male">Male</label><br>
                      <input type="radio" name="gender" id="female" value="female">
                      <label for="female">Female</label><br>
                <div class="form-group"> <label for="exampleInputEmail1"> Usia</label> <input type="int" class="form-control mt-1" id="usia" name="usia"  value="<?php  echo $row['usia'];?>" required="true"> </div>

							  <button type="submit" name="submit"id="create"class="btn btn-primary mt-2">update</button>
                <a href="./admin.php"  class="btn btn-danger mt-2">Back</a>
                    </form> 
        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->


</body>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>
<?php } ?>
