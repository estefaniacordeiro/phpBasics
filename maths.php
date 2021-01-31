<?php

echo '<br>';

//Define a variable whose value is the result of the function that returns an absolute value.
$value = -6;
echo abs($value);
echo '<br>';

//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
$round = 3.5679;
echo round($round);
echo '<br>';

//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
$arr = array(5.5, 3, 20, -15, 0);
echo max($arr);
echo '<br>';

//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
echo min($arr);
echo '<br>';

?>