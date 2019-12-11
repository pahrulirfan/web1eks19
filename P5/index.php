<!doctype html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<h2>Contoh PHP</h2>
<?php
// dasar variable
$a = 10;
echo 'isi variable a = ' . $a;
echo '<br>';
// kondisi
if ($a >= 10) {
    echo 'A lebih besar';
} else {
    echo 'A lebih kecil';
}
echo '<br>';
echo ($a >= 10) ? 'A = 10' : 'A > 10';
// perulangan
echo '<br>';
for ($i = 10; $i >= 1; $i--) {
    echo $i . '<br>';
}
?>
</body>
</html>