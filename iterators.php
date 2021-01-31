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

