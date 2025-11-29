<?php
$car = 'Honda Civic';   // string
$stocks = 7;            // integer
$purchased = 1;         // integer
$deal = true;           // boolean


$buy = (($purchased <= $stocks) && ($deal == true));

$addString = 1 + "2";                 
$addMixed  = intval("5cars") + 3;     
$concat    = "Correct " . true;            
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Dealership</h1>
    <h2>Receipt</h2>

    <p><strong>Car:</strong> <?= $car ?></p>
    <p><strong>Stock:</strong> <?= $stocks ?></p>
    <p><strong>Purchased:</strong> <?= $purchased ?></p>

    
    <p><strong>Shipped:</strong> <?= $buy ? "Yes" : "No" ?></p>

    <hr>

    <h2>Type Juggling Examples</h2>
    <p>1 + "2" = <?= $addString ?> (string converted to integer)</p>
    <p>"5 cars" + 3 = <?= $addMixed ?> (using intval() to avoid warning)</p>
    <p>"Correct" = "<?= $concat ?>" (boolean true becomes "1")</p>

</body>
</html>
