<?php
ini_set('memory_limit', '-1');

$start = microtime(true);

# 1.
$i           = 0;
$multiples   = array();
while($i < PHP_INT_MAX) {
    foreach(range(2, 20) as $djelitelj) {
        if($i%$djelitelj == 0) {
            #$is_multiple = $i;
            $multiples[$i][$djelitelj] = 0;
        }
        #echo 'Dividing ' . $i . ' with ' . $djelitelj . ': ' . $i%$djelitelj . "\n";
    }
    $i++;
}

array_shift($multiples[0]);
foreach($multiples as $k => $num) {
    if(count(array_unique($num)) == 1 && count($num) == 9) {
        echo $k . PHP_EOL;
    }
}

echo 'Finished in ' . microtime(true)-$start;

?>