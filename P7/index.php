<?php
require 'connect.php';
?>
<!doctype html>
<html>
<head>
  <title>Data UAS</title>
</head>
<body>
<h2>Data UAS</h2>
<hr>

<a href="tambah.php">Tambah Data</a>
<br> <br>

<table border="1" width="70%" cellspacing="0" cellpadding="3">
  <tr>
    <th width="2%">No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
  </tr>
  <?php
  $no = 1;
  $query = mysqli_query($setting, "SELECT * FROM uas");
  while ($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $row['Nama']; ?></td>
      <td><?php echo $row['alamat']; ?></td>
      <td>
        <a href="hapus.php?id=<?php echo $row['id'] ?>">Hapus</a>
        <a href="ubah.php?id=<?php echo $row['id'] ?>">Ubah</a>
      </td>
    </tr>
    <?php
  }
  ?>
</table>
</body>
</html>
