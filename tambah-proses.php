<?php
    require ('./inc/koneksi.php');


    // sesuaikan dengan form
    $addnama = $_POST['nama'];
    $addNIM = $_POST['NIM'];
    $addalamat = $_POST['alamat'];
    $addtgl = $_POST['tgllahir'];
    $addgender = $_POST['gender'];
    $addusia = $_POST['usia'];

    $sql = "SELECT * FROM users where NIM='$addNIM'";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) > 0){
    // header("Location: ./tambah-data.php?info=Siswa Sudah terdaftar!!");
    }else {

    $sql= "INSERT INTO  users (nama,NIM,alamat,tgllahir,gender,usia) values('$addnama','$addNIM','$addalamat','$addtgl','$addgender','$addusia')";
        $query = mysqli_query($conn,$sql);
    header("Location: ./admin.php?cek=Data telah ditambah");
        
    if(isset($_POST['submit'])) {
        // Proses pembaruan data dilakukan di sini

        // Setelah proses pembaruan data selesai, arahkan pengguna ke halaman index
        header("Location: admin.php");
        exit; // Pastikan untuk keluar dari skrip setelah mengarahkan header
    }
    }
?>