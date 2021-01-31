<?php

//Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”
$currentDay = date('l');
if ($currentDay == 'Monday') {
    echo 'We are on Monday';
    echo '<br>';
}



?>