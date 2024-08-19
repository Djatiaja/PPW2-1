<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="POST">
        <label for="nim">Masukan NIM:</label>
        <br>
        <input type="text" name="nim" placeholder="nim" id="nim">
        <br>
        <label for="nama">Masukan Nama</label>
        <br>
        <input type="text" name="nama" placeholder="nama" id="nama">
        <br>
        <label for="JenisKelamin">Jenis Kelamin</label>
        <br>
            <input type="radio" name="jenis_kelamin" id="jeniskelamin" value="L">Laki Laki
            <input type="radio" name="jenis_kelamin" id="jeniskelamin" value="P">Perempuan
        <br>
        <label for="jurusan">Jurusan :</label>
        <br>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih jurusan</option>
            <option value="Teknik Informatika"> Teknik Informatika</option>
            <option value="Teknik Mesin"> Teknik Mesin</option>
            <option value="Teknik Elektro"> Teknik Elektro</option>
        </select>

        <br>
        <label for="alamat">Masukan Alamat :</label>
        <br>
        <input type="text" name="alamat" placeholder="alamat" id="alamat"><br>
        <button type="submit">Submit</button>


    </form>
</body>
</html>