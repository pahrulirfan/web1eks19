<?php
require 'connect.php';
?>

<!doctype html>
<html>
<head>
    <title>Data Skripsi</title>
</head>
<body>
<h2>Data Skripsi</h2>
<hr>
<table border="1" width="70%">
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
            <td>Update | Delete</td>
        </tr>
    <?php
    endwhile;
    ?>
    </tbody>
</table>

</body>
</html>
