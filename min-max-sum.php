<?php

// Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers.
// Then print the respective minimum and maximum values as a single line of two space-separated long integers.

function miniMaxSum($arr) {
    $min = min($arr);
    $max = max($arr);
    $maxSum = 0;
    $minSum = 0;
    $allValuesAreTheSame = (count(array_unique($arr)) === 1);
    
    if($allValuesAreTheSame != 1) {
        // Get the maxSum
        foreach($arr as $item) {
            if($item != $min) {
                $maxSum = $maxSum + $item;
            }
        }
    
        // Get the minSum
        foreach($arr as $item) {
            if($item != $max) {
                $minSum = $minSum + $item;
            }
        }
    } else {
        $arr = array_slice($arr, 0, -1);
        $minSum = array_sum($arr);
        $maxSum = array_sum($arr);
    }
    
    return $minSum . ' ' . $maxSum;
}

echo miniMaxSum([5,5,5,5,5]);