<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($mysqli,"select * from tb_keluarga where username = '$username' and password = '$password'");
$result = mysqli_num_rows($query);

if($result > 0 ){
    header("location:../app/home.php");
}
else {
    header("location:../index.php?pesan=error");
}
?>