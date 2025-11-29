<?php
$car = 'Honda Civic';
$stocks = 7;
$purchased = 1;
$deal = true;
$buy = (($purchased <= $stocks) && ($deal == true));
?>
<!DOCTYPE html>
<html>
    <head> ... 
        <link rel = "stylesheet" href = "css/styles.css">
    </head>
    <body>
        <h1> Dealership </h1>
        <h2> Receipt </h2>
        <p>Car:     <?= $car ?> </p>
        <p>Stock:     <?= $stocks ?> </p>
        <p>Purchased:     <?= $purchased ?> </p>
        <p>Shipped:     <?= $buy ?> </p>
    </body>
</html>

