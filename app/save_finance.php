<?php
include 'config.php';

$type = $_POST['type'];
$description = $_POST['description'];
$amount = $_POST['amount'];
$category = $_POST['category'];

$sql = "INSERT INTO tbkeuangan (type, description, amount, category) VALUES ('$type', '$description', '$amount', '$category')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
