<!-- Create an array of fruits ($fruits = ["Apple", "Banana", "Orange"])
and display each fruit using a foreach loop. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h2>Displaying Fruits from Array</h2>
    <?php
$fruits=["Apple", "Banana", "Orange"];

foreach($fruits as $fruit){
    echo $fruit . "<br>";
}
    ?>
</body>
</html>