<?php
include "Database.php";
$id_mhs = $_GET['id_mhs']? $_GET['id_mhs'] : '';
$query = "DELETE FROM mahasiswa WHERE id_mhs='$id_mhs'";
$result = $conn->query($query);
if ($result) {
    header('Location: ' . 'Index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

?>