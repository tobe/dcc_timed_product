#!/usr/bin/php
<?php
#ini_set('memory_limit', '-1');
# 1. Task analyzation
$a = 1;
$b = 2;
for($i = 1; $i < 10; $i++) {
    $x = $a+$b;
    #echo $x + $b . PHP_EOL;
    $a = $b;
    $b = $x;
}

# 2. Problem
$a      = 1;
$b      = 2;
$sum    = 0;
while($a < 4000000) {
    $x      = $a+$b;
    $a      = $b;
    $b      = $x;

    if($a%2 == 0) { $sum += $a; }
}
echo $sum;
?>