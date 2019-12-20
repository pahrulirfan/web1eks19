<!doctype html>
<html>
<head>
    <title>Create Data</title>
    <style>
        label, input {
            display: block;
        }
    </style>
</head>
<body>
<h2>Create Data</h2>
<hr>
<?php
require 'connect.php';
if (isset($_POST['submit'])) {
    $nim = $_POST['txtnim'];
    $nama = $_POST['txtnama'];
    $judul = $_POST['txtjudul'];
    $pembimbing = $_POST['txtpembimbing'];

    $query = "INSERT INTO skripsi VALUES(NULL, '$nim', '$nama', 
                '$judul', '$pembimbing')";

    $proses = mysqli_query($koneksi, $query);
    if ($proses) {
        header('location: index.php');
    } else {
        echo 'Anda kurang beruntung';
    }
}
?>
<form action="" method="post">
    <label>NIM</label>
    <input type="text" name="txtnim">
    <label>Nama</label>
    <input type="text" name="txtnama">
    <label>Judul</label>
    <input type="text" name="txtjudul">
    <label>Pembimbing</label>
    <input type="text" name="txtpembimbing">
    <input type="submit" value="Simpan" name="submit">
</form>
</body>
</html>