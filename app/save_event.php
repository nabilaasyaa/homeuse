<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $event_date = $_POST['event_date'];

  $sql = "INSERT INTO tbmanajemenwaktu (title, description, event_date) VALUES ('$title', '$description', '$event_date')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
