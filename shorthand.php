<?php
$car = ['100,000 Php', '50,000 Php', '25,000 Php'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Variable</title>
        <link rel = "stylesheet" href = "css/styles.css">
    </head>
    <body>
        <h1>Car Dealer</h1>
        <h2>Sports Cars</h2>
        <p>Your down payment on the car is: 
             <?= $car[0]; ?></p>
    </body>
</html>
