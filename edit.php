<?php
include "Database.php";
$id_mhs = $_GET['id_mhs'];
$mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mhs=$id_mhs");
$row = mysqli_fetch_array($mahasiswa);
$jurusans = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Elektro'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
<input type="hidden" name="id_mhs" value="<?php echo $row["id_mhs"]?>">
        <label for="nim">Masukan NIM:</label>
        <br>
        <input type="text" name="nim" placeholder="nim" id="nim" value="<?php echo $row['nim']?>">
        <br>
        <label for="nama">Masukan Nama</label>
        <br>
        <input type="text" name="nama" placeholder="nama" id="nama" value="<?php echo $row['nama']?>">
        <br>
        <label for="JenisKelamin">Jenis Kelamin</label>
        <br>
        <input type="radio" name="jenis_kelamin" id="jeniskelamin" value="L" <?php echo $result=$row['jenis_kelamin']=='L'?'checked':'' ?>>Laki Laki
        <input type="radio" name="jenis_kelamin" id="jeniskelamin" value="P"<?php echo $result=$row['jenis_kelamin']=='P'?'checked':'' ?> >Perempuan
        <br>
        <label for="jurusan">Jurusan :</label>
        <br>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih jurusan</option>
            <?php
            foreach ($jurusans as $jurusan) {
                echo "<option value='$jurusan' ".($row['jurusan']==$jurusan?'selected':'').">$jurusan</option>";
            }
            ?>
        </select>
        <br>
        <label for="alamat">Masukan Alamat :</label>
        <br>
        <input type="text" name="alamat" placeholder="alamat" id="alamat" value="<?php echo $row['alamat'] ?>"><br>
        <button type="submit">Submit</button>


    </form>
</body>
</html>