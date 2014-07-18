#!/usr/bin/php
<?php

for($a = 0; $a <= 1000; $a++) {
    for($b = $a+1; $b <= 1000; $b++) {
        for($c = $b+1; $c <= 1000; $c++) {
            if(pow($a, 2)+pow($b, 2) == pow($c, 2) && ($a+$b+$c == 1000)) {
                echo $a . '+' . $b . '+' . $c . '=1000';
            }
        }
    }
}

?>