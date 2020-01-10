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
<table border="1" width="50%" cellspacing="0" cellpadding="3">
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
      <td></td>
    </tr>
    <?php
  }
  ?>
</table>
</body>
</html>
