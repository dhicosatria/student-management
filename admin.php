<?php 
include('inc/koneksi.php');

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="assets/script.js" defer></script>

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
    <title>Student Management</title>
  </head>
  <body>
      <!-- navbar -->
      <?php include'inc/header.php'; ?>
        <!-- navbar end -->


    <!-- Banner Start -->
    <section class="hero container">
      <div class="mt-5">
        <div class="row ms-3">
          <div class="col-md-6">
            <h1 class="fw-bold">
              Student Management
            </h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner End -->

    <!-- Service-->
    <span id='service'></span>
    <section class="popular-barber bg-theme pt-2 pb-2 mt-5">
      <div class="container">
        <div class="row">
          <h3 class="fw-bold ms-3" >
           Daftar siswa
          </h3>
          <hr>
        <a href="tambah-data.php">
          <button>tambah data</button>
        </a>
        </div>
        
        <div class="row mt-3">

    <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
        <div class="table-responsive bs-example widget-shadow">
						<table class="table table-bordered mt-3">
               <thead>
                 <tr>
                   <th>#</th> 
                   <th>Nama</th>
                    <th>NIM</th>
                     <th>alamat</th>
                     <th>tanggal lahir</th>
                     <th>gender</th>
                     <th>usia</th>
                     <th colspan="2"><center> Action</center></th>
                     </tr> 
                    </thead>
                     <tbody>
                        <?php
                        $ret=mysqli_query($conn,"select *from  users");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                        ?>
						 <tr>
               <th scope="row"><?php echo $cnt;?></th> 
               <td><?php  echo $row['nama'];?></td>
                <td><?php  echo $row['NIM'];?>K</td>
                <td><?php  echo $row['alamat'];?>K</td>
                <td><?php  echo $row['tgllahir'];?></td>
                <td><?php  echo $row['gender'];?></td>
                <td><?php  echo $row['usia'];?></td>
                <td style="width:150px;">
						 	<a href="edit.php?NIM=<?php echo $row['NIM'];?>" class="btn btn-primary">Edit</a>	 	
						 	<a href="admin.php?delete=<?php echo $row['NIM'];?>" class="btn btn-danger " onClick="return confirm('Are you sure you want to delete?')">Delete</a>
						 	</td>
                             </tr>  
                              <?php 
                                    $cnt=$cnt+1;
                                    }?>
                            </tbody> 
                        </table> 
					</div>
				</div>
			</div>
		</div>
    
  </body>
  </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/script.js"></script>
    <script>
      feather.replace();
      AOS.init();
    </script>
  </body>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>

