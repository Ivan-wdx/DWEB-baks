<?php
include 'header.php';
include 'menu.php';
require 'data.php';
?>

<h2>Car Dealership — PHP Control Structures Activity</h2>

<?php
$hour = date("H");

if ($hour < 12) {
    echo "<p>Good morning, valued customer!</p>";
} elseif ($hour < 18) {
    echo "<p>Good afternoon! Check out our car deals.</p>";
} else {
    echo "<p>Good evening! Browse our car listings.</p>";
}
echo "<hr>";

foreach ($cars as $c) {
    echo "<p><strong>{$c['model']}</strong> — ₱" . number_format($c['price']);
    if ($c['price'] <= 500000) {
        echo " — <span class='green'>Budget Car</span>";
    } elseif ($c['price'] <= 1500000) {
        echo " — <span class='orange'>Mid-range Car</span>";
    } else {
        echo " — <span class='red'>Luxury Car</span>";
    }
    echo "</p>";
}
echo "<hr>";

for ($i = 1; $i <= 5; $i++) {
    echo "Rank #$i — Popular Car Model<br>";
}
echo "<hr>";

$month = 1;
$payment = 10000;
while ($month <= 5) {
    echo "Month $month: Paid ₱" . number_format($payment) . "<br>";
    $month++;
}
echo "<hr>";

$promo = rand(1, 4);
switch ($promo) {
    case 1: echo "FREE car detailing for every purchase!"; break;
    case 2: echo "FREE 1-year maintenance package!"; break;
    case 3: echo "FREE full tank on release day!"; break;
    default: echo "₱10,000 CASH DISCOUNT!"; 
}
echo "<hr>";
?>

<?php include 'footer.php'; ?>
