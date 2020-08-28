<?php

function deleteElement($arr){
    $newArr = array();

    for ($i = 0; $i < count($arr); $i++){
        if (!in_array($arr[$i],$newArr)){
            array_push($newArr,$arr[$i]);
        }
    }

    return $newArr;
}

$array = [1,2,3,2,4,4,5,4,6];
$result = deleteElement($array);

echo '<pre>';
print_r($result);