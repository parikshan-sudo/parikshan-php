<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "UPDATE tasks SET completed = NOT completed WHERE id = $id";
    $conn->query($sql);
    header("Location: index.php");
}

$conn->close();
