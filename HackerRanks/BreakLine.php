<?php
function breakLine($num,$str){
    $arr = array();
    $count = 0;
    for ($i = 0; $i < $num; $i++) {
        if (strpos($str, ' ', $count) > $num) {
            array_push($arr,'<br>');
        }
        array_push($arr, substr($str, $count, strpos($str, ' ', strpos($str, ' ', $count))));
        $count = strpos($str, ' ', $count);
    }
    var_dump($arr);
}

$string = 'Viet Nam vo dich khong noi nhieu';
print_r(breakLine(10,$string));