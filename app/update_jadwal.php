<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $tugas = $_POST['tugas'];
    $jadwal = $_POST['jadwal'];

    $sql = "UPDATE jadwal_kebersihan SET tugas='$tugas', jadwal='$jadwal' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Jadwal berhasil diupdate!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>