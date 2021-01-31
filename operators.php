<?php

//Create an example of use for arithmetic operators: +, -, *, /, and%
    $a = 5;
    $b = 10;
    echo '<br>';
    echo $a + $b;
    echo '<br>';
    echo $a - $b;
    echo '<br>';
    echo $a * $b;
    echo '<br>';
    echo $a / $b;
    echo '<br>';
    echo $a % $b;
    echo '<br>';

//Create a usage example for comparison operators: ==,! =, <,>, <=,> =
var_dump($a == $b);
echo '<br>';
var_dump($a > $b);
echo '<br>';
var_dump($a < $b);
echo '<br>';
var_dump($a >= $b);
echo '<br>';
var_dump($a <= $b);
echo '<br>';
var_dump($a != $b);
echo '<br>';

//Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
var_dump($a < 8 && $b > 4);
echo '<br>';
var_dump($a < 8 || $b > 4);
echo '<br>';
var_dump(!($a < 8 && $b > 4));

?>