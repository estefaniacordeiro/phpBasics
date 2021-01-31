<?php

//It generates a function that given two numbers returns the sum of both
function sum($num1, $num2){
    return $num1 + $num2;
}
echo "1 + 2 = " . sum(1,2);
echo '<br>';

//It generates a function that given two numbers returns the multiplication of both
function mult($num1, $num2){
    return $num1 * $num2;
}
echo "12 * 2 = " . mult(12,2);
echo '<br>';

//It generates a function that given two numbers returns the division of both
function div($num1, $num2){
    return $num1 / $num2;
}
echo "11 / 2 = " . div(11,2);
echo '<br>';

//It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function chooseOper($num1, $num2, $variable){
    switch ($variable) {
        case 'add':
            return sum($num1,$num2);
            break;
        case 'multiply':
            return mult($num1,$num2);
            break;
        case 'divide':
            return div($num1,$num2);
            break;
        default:
            return "This operation doesn't exist";
            break;
    }
}
echo "1 multiply(*) 2 = " . chooseOper(1,2,'multiply');
echo '<br>';

?>