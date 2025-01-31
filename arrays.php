<?php

//Define a simple array composed of text strings
$arr= array('one', 'two', 'three', 'four', 'five');
print_r($arr);
echo '<br>';

//Define a simple array consisting of whole numbers and decimal numbers
$arrNum = array(16, 3.2 , -4);
print_r($arrNum);
echo '<br>';

//Define a multidimensional array
$multiArray = array(
    array('row 0 col 1', 'row 0 col 2'),
    array('row 1 col 1', 'row 1 col 2')
);
print_r ($multiArray);
echo '<br>';

//Execute the function that allows to obtain the length of an array
echo count($arr);
echo '<br>';

//Execute the function that allows to obtain the combination of two arrays
print_r (array_merge($arr, $arrNum));
echo '<br>';

//Execute the function that once is given an array return the last element of it
$last = array_pop($arrNum);
echo ($last);
echo '<br>';

//Execute the function that once is given an array add a new element to the array in question
$newArr = array( 11, 13, 15, 17);
$newNum = 55;
array_push($newArr, $newNum);
print_r ($newArr);

?>