<!-- Write a PHP script that displays the current date in the format YYYY-MM-DD. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working With Dates</title>
</head>
<body>
    <h2>Current Date</h2>
    <?php

$date = date("Y-m-d");
echo $date;

    ?>
</body>
</html>