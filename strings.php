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

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
echo str_ireplace("breo", "Estefanía", $myString);
echo '<br>';

//Execute the function that allows you to write a text N times
echo str_repeat('hi ', 3);
echo '<br>';

?>