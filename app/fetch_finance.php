<?php
include 'config.php';

$sql = "SELECT * FROM tbkeuangan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['type']}</td>
                <td>{$row['description']}</td>
                <td>Rp " . number_format($row['amount'], 2, ',', '.') . "</td>
                <td>{$row['category']}</td>
                <td>
                  <button class='btn btn-warning btn-edit' data-id='{$row['id']}' data-type='{$row['type']}' data-description='{$row['description']}' data-amount='{$row['amount']}' data-category='{$row['category']}'><i class='bi bi-pencil-square'></i> Edit</button>
                  <button class='btn btn-danger btn-delete' data-id='{$row['id']}'><i class='bi bi-trash'></i> Hapus</button>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No data available</td></tr>";
}

$conn->close();
?>
