<?php
include 'config.php';

$id = $_POST['id'];
$type = $_POST['type'];
$description = $_POST['description'];
$amount = $_POST['amount'];
$category = $_POST['category'];

$sql = "UPDATE tbkeuangan SET type='$type', description='$description', amount='$amount', category='$category' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diperbarui!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
