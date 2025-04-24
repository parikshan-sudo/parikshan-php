<?php
$host = "localhost";
$username = "todo_app"; 
$password = "todo_app";   
$dbname = "todo_apps";


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
