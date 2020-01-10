<?php
if (isset($_GET['id'])) {

  require 'connect.php';
  $id = $_GET['id'];

  $query = mysqli_query($setting, "DELETE FROM uas WHERE id=$id");
  if ($query) {
    header('location: index.php');
  } else {
    echo 'Data Gagal Dihapus !';
  }

} else {
  header('location: index.php');
}