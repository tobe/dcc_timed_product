<?php

// 999*999 = 998001
$arr = array();
for($i = 100; $i <= 999; $i++) {
    for($j = 999; $j >= 100; $j--) {
        $res = $i*$j;
        if($res == strrev($res)) {
            $arr[] = $res;
        }
    }
}

sort($arr);
echo end($arr);
?>