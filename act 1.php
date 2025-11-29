<?php
$member = [
    'price' => '$100,000',
    'price2' => '$300,000',
    'price3' => '$350,000'
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Variable</title>
        <link rel = "stylesheet" href = "css/styles.css">
    </head>
    <body>
        <h1>Car Dealer</h1>
        <h2>Cars and Prices</h2>
        <p>Porche: <?php echo $member['price']; ?></p>
        <p>Ferrari: <?php echo $member['price2']; ?></p>
        <p>Lamborghini: <?php echo $member['price3']; ?></p>
    </body>
</html>
