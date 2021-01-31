<?php

//Print a text string
echo 'Bye';
echo '<br>';

//Print a text string that interpret variables
$name = 'Breo';
echo "My name is $name.";
echo '<br>';

//Concatenate a previously declared variable in a text string
echo 'My ' . "name " . "is " . $name;
echo '<br>';

//Execute the function that allows you to replace text in a string (case sensitive)
$myString = 'My name is breo';
echo str_replace("breo", "Breo", $myString);
echo '<br>';

?>