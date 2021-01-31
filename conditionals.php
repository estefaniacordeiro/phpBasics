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

//Create a double condition that evaluates:
//If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
if (date('i') < 10) {
    echo "The current minute is less than 10";
}else if(date('i') > 15){
    echo "The current minute is more than 15";
}else{
    echo "Doesn't meet any conditions";
}
echo '<br>';

?>