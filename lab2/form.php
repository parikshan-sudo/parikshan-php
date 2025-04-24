<!DOCTYPE html>
<html>
<head>
  <title>Form Handling</title>
</head>
<body>
  <h2>Submit Your Information</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <button type="submit">Submit</button>
  </form>

  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    
    $email = $_POST['email'];

    echo "<h2>Submitted Data:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>
</body>
</html>
