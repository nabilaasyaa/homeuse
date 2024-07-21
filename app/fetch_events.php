<?php
include 'config.php';

$sql = "SELECT * FROM tbmanajemenwaktu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['event_date'] . "</td>";
    echo "<td>
            <button class='btn btn-warning btn-sm btn-edit' data-id='".$row['id']."' data-title='".$row['title']."' data-description='".$row['description']."' data-event_date='".$row['event_date']."' data-bs-toggle='modal' data-bs-target='#editEventModal'>Edit</button>
            <button class='btn btn-danger btn-sm btn-delete' data-id='".$row['id']."'>Delete</button>
          </td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='4'>No events found</td></tr>";
}
$conn->close();
?>
