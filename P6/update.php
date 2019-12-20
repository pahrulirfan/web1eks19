<!doctype html>
<html>
<head>
    <title>Update Data</title>
    <style>
        label, input {
            display: block;
        }
    </style>
</head>
<body>
<h2>Update Data</h2>
<hr>
<?php
require 'connect.php';

if (isset($_GET['id'])) {
    // proses pengambilan data dari database
    $id = $_GET['id'];
    $query = "SELECT * FROM skripsi WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($result);
//    var_dump($data);
} else {
    // jika id tidak ada, balik ke file index
    header('location: index.php');
}

if (isset($_POST['submit'])) {
    $nim = $_POST['txtnim'];
    $nama = $_POST['txtnama'];
    $judul = $_POST['txtjudul'];
    $pembimbing = $_POST['txtpembimbing'];
    $id = $_POST['txtid'];

    $query = "UPDATE skripsi SET nim='$nim', nama='$nama', 
                judul='$judul', pembimbing='$pembimbing' WHERE id=$id";

    $proses = mysqli_query($koneksi, $query);
    if ($proses) {
        header('location: index.php');
    } else {
        echo mysqli_error($koneksi);
        echo 'Anda kurang beruntung';
    }
}
?>
<form action="" method="post">
    <label>NIM</label>
    <input type="hidden" name="txtid" value="<?= $data['id']; ?>">
    <input type="text" name="txtnim" value="<?= $data['nim']; ?>">
    <label>Nama</label>
    <input type="text" name="txtnama" value="<?= $data['nama']; ?>">
    <label>Judul</label>
    <input type="text" name="txtjudul" value="<?= $data['judul']; ?>">
    <label>Pembimbing</label>
    <input type="text" name="txtpembimbing" value="<?= $data['pembimbing']; ?>">

    <input type="submit" value="Simpan" name="submit">
</form>
</body>
</html>