<?php

// Given a square matrix, calculate the absolute difference between the sums of its diagonals.
function diagonalDifference($arr) {
    $soma1 = 0;
    $soma2 = 0;
    $length = count($arr);
    for($i=0; $i < $length; $i++) {
        $soma1 += $arr[$i][$i];
        $soma2 += $arr[$i][$length - $i - 1];
    }
    return abs($soma1 - $soma2);
}

print_r(diagonalDifference([[11,2,4], [4,5,6], [10,8,-12]]));