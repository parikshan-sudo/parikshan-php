<!-- Write a PHP script that checks if a number is even or odd. Display the 
result. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <h2>Odd / Even Checking</h2>
    <?php

$num=19;
if($num%2==0){
    echo "$num is even";

}
else{
    echo "$num is odd";
}
    ?>
</body>
</html>