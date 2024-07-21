<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];

  $sql = "DELETE FROM tbmanajemenwaktu WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();
}
?>
