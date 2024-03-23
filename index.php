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
    <link rel="shorcut icon" type="image/png" href="assets/img/logo.png" />
    <script src="assets/sciript.js" defer></script>

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


    <!-- Service-->
    <span id='service'></span>
    <section class="popular-barber bg-theme pt-2 pb-2 mt-5">
      <div class="container">
        <div class="row">
          <h3 class="fw-bold ms-3" >
           Daftar siswa
          </h3>
          <hr>
        </div>
        <div class="row mt-3">

    <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
        <div class="table-responsive bs-example widget-shadow">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

						<table class="table table-bordered mt-3" id="myTable">
               <thead>
                 <tr class="header">
                   <th>#</th> 
                   <th onclick="sortTable(0)">Nama</th>
                    <th onclick="sortTable(1)">NIM</th>
                     <th>alamat</th>
                     <th>tanggal lahir</th>
                     <th>gender</th>
                     <th>usia</th>
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

                             </tr>  
                              <?php 
                                    $cnt=$cnt+1;
                                    }?>
                            </tbody> 
                        </table> 
            <div class="container">
              <div class="row mt-3">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Jumlah Mahasiswa</h5>
                      <p class="card-text">
                        <?php
                          $queryTotalMahasiswa = mysqli_query($conn, "SELECT COUNT(*) AS total_mahasiswa FROM users");
                          $resultTotalMahasiswa = mysqli_fetch_assoc($queryTotalMahasiswa);
                          echo $resultTotalMahasiswa['total_mahasiswa'];
                        ?>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Jumlah Berdasarkan Gender</h5>
                      <ul class="list-group list-group-flush">
                        <?php
                          $queryGenderCount = mysqli_query($conn, "SELECT gender, COUNT(*) AS total_gender FROM users GROUP BY gender");
                          while ($resultGenderCount = mysqli_fetch_assoc($queryGenderCount)) {
                        ?>
                          <li class="list-group-item">
                            <?php echo $resultGenderCount['gender']; ?>: <?php echo $resultGenderCount['total_gender']; ?>
                          </li>
                        <?php
                          }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
					</div>
				</div>
			</div>
		</div>
  </main>
    

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "desc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</html>
