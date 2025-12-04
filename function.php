<?php
declare(strict_types=1);
include 'header.php';
include 'menu.php';


$carModels = [
    "Toyota Supra MK4"        => ["price" => 1200000, "stock" => 4],
    "Nissan Skyline R34 GT-R" => ["price" => 2100000, "stock" => 2],
    "Mazda RX-7 FD"           => ["price" => 1001000, "stock" => 6],
    "Mitsubishi Lancer Evo X" => ["price" => 1120000, "stock" => 4],
    "Subaru Impreza WRX STI"  => ["price" => 1425000, "stock" => 7],
];


$tax_rate = 12;


function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax = 0): float {
    return ($price * $qty) * ($tax / 100);
}
    
?>

<h2 style="text-align:center;">JDM Sports Car — Stock Monitoring</h2>

<table>
    <tr>
        <th>Car Model</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Value ($)</th>
        <th>Tax Due ($)</th>
    </tr>

<?php
foreach ($carModels as $modelName => $data) {

    $price = $data["price"];
    $qty   = $data["stock"];

    echo "<tr>";
    echo "<td>$modelName</td>";
    echo "<td>$qty</td>";
    echo "<td>" . get_reorder_message($qty) . "</td>";
    echo "<td>$" . number_format(get_total_value($price, $qty), 2) . "</td>";
    echo "<td>$" . number_format(get_tax_due($price, $qty, $tax_rate), 2) . "</td>";
    echo "</tr>";
}
?>

</table>

<?php include 'footer.php'; ?>
