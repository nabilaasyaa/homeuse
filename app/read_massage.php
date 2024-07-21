<?php
include 'db.php';

$sql = "SELECT * FROM messages";
$stmt = $pdo->query($sql);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
