<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../P4/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="card">
                <div class="card-header bg-success">Login</div>
                <div class="card-body">
                    <?php
                    require 'connect.php';
                    if (isset($_POST['login'])) {
                        $email = $_POST['txtemail'];
                        $password = sha1($_POST['txtpassword']);

                        $query = "Select * from user where email='$email' and password='$password'";
                        //proses query
                        $data = mysqli_query($koneksi, $query);
                        //cek data ke database apakah ada data yang terdaftar
                        if (mysqli_num_rows($data) > 0) {
                            // jika ada data, ambil data tersebut, masukkan kedalam variable result
                            $result = mysqli_fetch_array($data);
                            // tambahkan variable session yg nanti digunakan untuk pengecekan login
                            $_SESSION['nama'] = $result['nama'];
                            $_SESSION['email'] = $result['email'];
                            $_SESSION['status'] = $result['status'];
                            $_SESSION['login'] = TRUE;
                            // redirect ke file index
                            header('location: index.php');
                        } else {
                            // kalau email dan password salah, kasi keterangan error.
                            echo "<div class='alert alert-danger'>Username/Password Salah</div>";
                        }
                    }
                    ?>

                    <form action="" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="txtemail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="txtpassword" class="form-control">
                        </div>
                        <input type="submit" value="Login" name="login" class="btn btn-primary">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>