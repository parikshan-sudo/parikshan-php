<?php
require 'db.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $completed = $row['completed'] ? 'completed' : '';
        echo "<div class='task $completed'>";
        echo "<span>" . htmlspecialchars($row['task']) . "</span>";
        echo "<form action='toggle_task.php' method='POST' style='display:inline;'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<button type='submit'>" . ($row['completed'] ? "Undo" : "Complete") . "</button>";
        echo "</form>";
        echo "<form action='delete_task.php' method='POST' style='display:inline;'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<button type='submit'>Delete</button>";
        echo "</form>";
        echo "</div>";
    }
} else {
    echo "<p>No tasks yet. Add one above!</p>";
}

$conn->close();
