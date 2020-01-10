<?php
require 'connect.php';
if (isset($_GET['id'])) {

  $id = $_GET['id'];
  $proses = mysqli_query($koneksi, "DELETE FROM uas WHERE id=$id");

  if ($proses) {
    header('location: index.php');
  } else {
    echo 'Data tidak mau dihapus';
  }

} else {
  header('location: index.php');
}