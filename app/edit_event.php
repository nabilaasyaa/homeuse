<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $event_date = $_POST['event_date'];

  $sql = "UPDATE tbmanajemenwaktu SET title='$title', description='$description', event_date='$event_date' WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

  $conn->close();
}
?>
