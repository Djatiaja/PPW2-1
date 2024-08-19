<?php
    include "Database.php";
    $nim = $_POST['nim']? $_POST['nim'] : '';
    $nama = $_POST['nama']? $_POST['nama'] : '';
    $jenis_kelamin = $_POST['jenis_kelamin']? $_POST['jenis_kelamin'] : '';
    $jurusan = $_POST['jurusan']? $_POST['jurusan'] : '';
    $alamat = $_POST['alamat']? $_POST['alamat'] : '';

    $query = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, jurusan, alamat) VALUES ('$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat')";
    $result = $conn->query($query);
    
    if ($result) {
        header('Location: ' . 'Index.php');
    } else {
        echo "Error inserting data: " . $conn->error;
    }



?>