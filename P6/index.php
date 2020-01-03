<?php
session_start();
if ($_SESSION['login'] != true) {
    header('location: login.php');
}
require 'connect.php';
?>
<!doctype html>
<html>
<head>
    <title>Data Skripsi</title>
    <link rel="stylesheet" href="../P4/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Data Skripsi - <?php echo $_SESSION['nama'] . ' Status : ' . $_SESSION['status']; ?></h2>
    <hr>
    <a href="create.php" class="btn btn-outline-primary">Create Data</a>
    <a href="logout.php" class="btn btn-outline-warning float-right">Logout</a>
    <br> <br>
    <table class="table table-bordered" border="1" width="70%">
        <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Pembimbing</th>
            <th>Bulan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // membuat query dari PHP
        $query = mysqli_query($koneksi, "select * from skripsi ORDER BY create_at desc ");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) :
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?php echo $data['nim']; ?> </td>
                <td><?= $data['nama']; ?> </td>
                <td><?= $data['judul']; ?> </td>
                <td><?= $data['pembimbing']; ?> </td>
                <td><?= date('D, d/M/Y H:i:s', strtotime($data['create_at'])); ?></td>
                <td>
                    <?php if ($_SESSION['status'] == 'admin') { ?>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin ?')"
                           href="delete.php?id=<?= $data['id']; ?>">Delete</a>
                    <?php } ?>
                    <a class="btn btn-warning btn-sm" href="update.php?id=<?= $data['id']; ?>">Update</a>
                </td>
            </tr>
        <?php
        endwhile;
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
