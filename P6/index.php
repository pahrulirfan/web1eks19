<?php
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
    <h2>Data Skripsi</h2>
    <hr>
    <a href="create.php" class="btn btn-outline-primary">Create Data</a>
    <br> <br>
    <table class="table table-bordered" border="1" width="70%">
        <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Pembimbing</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // membuat query dari PHP
        $query = mysqli_query($koneksi, "select * from skripsi");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) :
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?php echo $data['nim']; ?> </td>
                <td><?= $data['nama']; ?> </td>
                <td><?= $data['judul']; ?> </td>
                <td><?= $data['pembimbing']; ?> </td>
                <td>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin ?')"
                       href="delete.php?id=<?= $data['id']; ?>">Delete</a>

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
