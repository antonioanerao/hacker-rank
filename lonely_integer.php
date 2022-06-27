<?php

// Given an array of integers, where all elements but one occur twice, find the unique element.
function lonelyinteger($a) {
    for($i=0; $i < count($a); $i++) {
        if(count(array_keys($a, $a[$i])) < 2) {
            return $a[$i];
        }
    }

    return false;
}

print_r(lonelyinteger([1,1,2,2,3]));