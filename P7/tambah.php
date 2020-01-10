<?php
require 'connect.php';
?>
<!doctype html>
<html>
<head>
  <title>Tambah Data</title>
</head>
<body>
<h2>Tambah Data</h2>
<hr>

<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['txtnama'];
  $alamat = $_POST['txtalamat'];

  $query = mysqli_query($setting, "INSERT INTO uas VALUES (NULL, '$nama', '$alamat')");
  if ($query == true) {
    header('location: index.php');
  } else {
    echo 'Gagal Simpan Data ';
    echo mysqli_error($setting);
  }
}
?>

<form action="" method="post">
  <label>Nama</label> <br>
  <input type="text" name="txtnama"> <br>

  <label>Alamat</label> <br>
  <textarea name="txtalamat" cols="30" rows="10"></textarea> <br>

  <input type="submit" name="simpan" value="Simpan">
  <a href="index.php">Batal</a>
</form>
</body>
</html>
