<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tugas = $_POST['tugas'];
    $jadwal = $_POST['jadwal'];

    $sql = "INSERT INTO jadwal_kebersihan (tugas, jadwal) VALUES ('$tugas', '$jadwal')";
    if ($conn->query($sql) === TRUE) {
        echo "Jadwal berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>