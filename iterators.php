<?php

//for:
/* for (expr1; expr2; expr3)
        statement
*/
for ($i = 1; $i <= 10; $i++) {
    echo "<br/>";
    echo $i;
}

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo "<br/>";
    echo $i;
}

//foreach: iterates over arrays and objects.
/*  foreach (iterable_expression as $value)
        statement
    foreach (iterable_expression as $key => $value)
        statement
*/

$a = array(1, 2, 3, 17);
foreach ($a as $v) {
    echo "<br/>";
    echo "Valor actual de \$a: $v.\n";
}

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);
foreach ($a as $k => $v) {
    echo "<br/>";
    echo "\$a[$k] => $v.\n";
}

//In order to be able to directly modify array elements within the loop precede $value with &.
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    echo "<br/>";
    $value = $value * 2;
    echo $value;
}
echo '<br>';
// $arr is now array(2, 4, 6, 8)

