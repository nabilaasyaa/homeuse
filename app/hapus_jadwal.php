<?php
include 'config.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM jadwal_kebersihan WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Jadwal berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
