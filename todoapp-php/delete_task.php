<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM tasks WHERE id = $id";
    $conn->query($sql);
    header("Location: index.php");
}

$conn->close();
