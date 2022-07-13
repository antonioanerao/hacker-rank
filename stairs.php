<?php

// This is a staircase of size n = 4
   #
  ##
 ###
####

// Its base and height are both equal to n. It is drawn using # symbols and spaces.
// The last line is not preceded by any spaces. Write a program that prints a staircase of size n

function staircase($n) {
    $spaces = $n;
    for($i=1; $i <= $n; $i++) {
        $spaces--;
        echo str_repeat(" ", $spaces);
        echo str_repeat("#", $i) . "\n";
    }
}

staircase(6);