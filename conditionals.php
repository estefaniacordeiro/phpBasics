<?php

//Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”
$currentDay = date('l');
if ($currentDay == 'Monday') {
    echo 'We are on Monday';
    echo '<br>';
}

//Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
$currentMonth = date('m');
if ($currentMonth == 10) {
    echo 'We are in October';
    echo '<br>';
}else{
    echo date('M');
    echo '<br>';
}

?>