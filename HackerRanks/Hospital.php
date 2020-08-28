<?php
function sum($arr)
{
    $sum = 0;
    $exceptArr = array();
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($arr[$i][$j] == 0) {
                array_push($exceptArr, $j);
            } else {
                if (!in_array($j, $exceptArr)) {
                    $sum += $arr[$i][$j];
                }
            }
        }
    }
    return $sum;
}
$result = sum([[0,1,2,0],[3,2,0,4],[7,8,1,2]]);
echo $result;