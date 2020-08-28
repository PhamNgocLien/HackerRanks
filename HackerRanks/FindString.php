<?php
function findString($arr)
{
    $result = array();
    $max = strlen($arr[0]);

    for ($i = 1; $i < count($arr); $i++) {
        if (strlen($arr[$i]) > $max) {
            $max = strlen($arr[$i]);
        }
    }

    for ($i = 0; $i < count($arr); $i++) {
        if (strlen($arr[$i]) == $max) {
            array_push($result, $arr[$i]);
        }
    }
    return $result;
}

$array = ['mybrothers', 'dog', 'book', 'mybrothers', 'cat', 'flower'];
echo '<pre>';
print_r(findString($array));