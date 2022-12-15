<?php
    $arr1 = [1,2,3,4,5,6,7,8,9,10];
    $arr2 = [10,9,8,7,6,5,4,3,2,1];

    $arrSum = [];
    foreach ($arr1 as $key => $value) {
        $arrSum[] = $arr1[$key] * $arr2[$key];
    }
    print_r($arrSum);

