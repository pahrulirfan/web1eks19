<?php
if (isset($_GET['id'])) {

    require 'connect.php';
    $id = $_GET['id'];
    $query = "DELETE FROM skripsi WHERE id=$id";
    $proses = mysqli_query($koneksi, $query);
    if ($proses) {
        header('location: index.php');
    } else {
        echo 'Data tidak mau dihapus';
    }

} else {
    header('location: index.php');
}