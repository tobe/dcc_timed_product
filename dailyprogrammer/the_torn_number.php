<?php
// foreach((string)range(1000, 10000) as $n) {
//     #$n = str_split($n);
//     var_dump($n);
//     #echo (string)$n{0};
//     #echo $n{0}.$n{1}+$n{2}.$n{3};
// }

#foreach(range(1000, 10000) as $n) {#

#}

// var_dump(array_map(function($n) {
//     echo $n
// }, range(1000,10000)));

array_map(function($n) {
    $n=(string)$n;
    $s=(($n[0].$n[1])+($n[2].$n[3]));
    var_dump(pow($s, 2));
    if($n == pow($s, 2)) {
        echo $n;
    }
    #if($n[0].$n[1]+$n[2].$n[3] == $n) { echo $n; }
}, range(1000, 9999));

#$f = function() { return 'hi'; };$f();

?>