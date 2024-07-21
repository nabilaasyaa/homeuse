<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $description = $_POST['description'];

    $sql = "UPDATE messages SET type = :type, description = :description WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'type' => $type, 'description' => $description]);

    header('Location: index.php'); // Redirect setelah memperbarui data
}
?>
