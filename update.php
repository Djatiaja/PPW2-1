<?php
include "Database.php";
$nim = $_POST['nim']? $_POST['nim'] : '';
$id_mhs = $_POST['id_mhs']? $_POST['id_mhs'] : '';
$nama = $_POST['nama']? $_POST['nama'] : '';
$jenis_kelamin = $_POST['jenis_kelamin']? $_POST['jenis_kelamin'] : '';
$jurusan = $_POST['jurusan']? $_POST['jurusan'] : '';
$alamat = $_POST['alamat']? $_POST['alamat'] : '';

$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', alamat='$alamat' 
WHERE id_mhs='$id_mhs'";
$result = mysqli_query($conn, $query);
if ($result) {
    header('Location: ' . 'Index.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}



?>