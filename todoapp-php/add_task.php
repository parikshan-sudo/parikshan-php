<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];
    
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>