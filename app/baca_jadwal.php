<?php
include 'config.php';

$sql = "SELECT * FROM jadwal_kebersihan";
$result = $conn->query($sql);

$jadwalData = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $jadwalData[] = $row;
    }
}
$conn->close();

echo json_encode($jadwalData);
?>