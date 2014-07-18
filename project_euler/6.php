#!/usr/bin/php
<?php
$sum_1 = 0;
for($i = 0; $i <= 100; $i++) {
    $a = pow($i, 2);
    $sum_1 = $sum_1 + $a;
}

$sum_2 = 0;
for($i = 0; $i <= 100; $i++) { $sum_2 = $sum_2 + $i; }
$sum_2 = pow($sum_2, 2);

echo $sum_2-$sum_1;

?>