<!-- Write a PHP script that takes a string $text = "Hello, World!" and
displays the length of the string, the uppercase version, and the lowercase
version. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    <h2>Operations on Hello World!</h2>
    <?php

    $text = "Hello, World!";

    echo "Length:". strlen($text) . "<br>";
    echo "Uppercase:". strtoupper($text) . "<br>";
    echo "Lowercase:". strtolower($text) . "<br>";
    ?>
    
</body>
</html>