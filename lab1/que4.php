<!-- <-- Create a PHP script that calculates the sum, difference, product, and
    quotient of two numbers ($a=10 and $b=5).  -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basic Arithmetic</title>
    </head>
    <body>
        <h3>Basic Arithmetic on 10 and 5</h3>
        <?php
$a=10;
$b=5;

$sum=$a+$b;
$diff=$a-$b;
$product=$a*$b;
$quitient=$a/$b;

echo "Sum: " . $sum . "<br>";
echo "Difference:".$diff."<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quitient . "<br>";
        ?>
    </body>
    </html>