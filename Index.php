<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data mahasiswa</h1>
    <?php
    include "Database.php";


    $mahasiswa = $conn->query("SELECT * FROM mahasiswa");
    echo "<table border='1'>";
    foreach ($mahasiswa as $row){
        echo "<tr>
                <td>".$row['nim']."</td>
                <td>".$row['id_mhs']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['jenis_kelamin']."</td>
                <td>".$row['jurusan']."</td>
                <td>".$row['alamat']."</td>
                <td> <a href='edit.php?id_mhs=".$row['id_mhs']."'>Edit</a></td>
                <td> <a href='delete.php?id_mhs=".$row['id_mhs']."'>Delete</a></td>
            </tr>";
    }
    echo "</table>";
    
    ?>
<a href="input_mahasiswa.php">
    <button>tambah data</button>
</a>
</body>
</html>