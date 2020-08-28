<?php
function find($arr)
{
    for ($i = 0; $i < count($arr)-1; $i++) {
        if ($arr[$i] == 0 && $arr[$i+1] == 0) {
            return true;
        }
    }
    return false;
}

$array = [0, 1, 2, 3, 4, 5];
echo find($array);