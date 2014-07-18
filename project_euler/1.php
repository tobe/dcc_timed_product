#!/usr/bin/php
<?php
# 1. Task analyzation

$numbers = [];
for($i = 1; $i < 10; $i++) {
    if($i*3 < 10) { $numbers[] = $i*3; }
    if($i*5 < 10) { $numbers[] = $i*5; }
}
#echo array_sum($numbers); # 2easy4me
$sum = 0;
foreach($numbers as $num) { $sum+=$num; }
echo $sum . PHP_EOL;

# 2. Problem
$numbers = [];
for($i = 0; $i < 1000; $i++) {
    if($i*3 < 1000) { $numbers[] = $i*3; }
    if($i*5 < 1000) { $numbers[] = $i*5; }
}
echo array_sum(array_unique($numbers));

?>