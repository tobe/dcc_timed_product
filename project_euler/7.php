#!/usr/bin/php
<?php
ini_set('memory_limit', '-1');
set_time_limit(0);
$start = microtime(true);

$primes = [];
for($i = 2; $i += 1; $i=$i) {
    $j = 0;
    foreach(range(2, $i-1) as $djelitelj) {
        #echo 'Djelimo ' . $i . ' sa ' . $djelitelj . PHP_EOL;
        #echo $i%$djelitelj;
        if($i%$djelitelj != 0) { $j++; }
        #$possible_primes[$i][$djelitelj] = $i%$djelitelj;
    }
    #echo 'i: ' . $i . ' ; j: ' . $j . "\n";
    if($j == $i-2) {
        array_push($primes, $i);
        echo $i  . ' count: ' . count($primes) . PHP_EOL;
    }
    if(array_key_exists(10001-2, $primes)) {
        echo 'GOT IT: ' . $primes[10001-2] . PHP_EOL;
        echo microtime(true)-$start . ' ms';
        die;
    }
}

?>