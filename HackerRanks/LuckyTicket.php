<?php

function checkTicket($str){
    $arr = str_split($str);
    $sumLeft = 0;
    $sumRight = 0;
    for ($i = 0; $i < count($arr)/2; $i++){
        $sumLeft += $arr[$i];
    }
    for ($j = count($arr)/2; $j < count($arr); $j++){
        $sumRight += $arr[$j];
    }
    if ($sumLeft == $sumRight){
        echo 'This is lucky numbers';
    } else {
        echo 'This is not lucky numbers';
    }
}

$string = 133007;
checkTicket($string);
