<?php

//echo: Output one or more strings, but no value is returned
# echo ( string $arg1 , string $... = ? ) : void

/* echo shortcut syntax <?= ..... ?> */
/* I have <?=$foo?> foo; */

//echo a string
echo "This is my first echo <br/>";

//echo a string as multiple arguments
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br/>";

//echo a string as concatenation
// \n spacing => codepoint ASCII 012
// chr() generate a single-byte string from a number
echo 'This' . "\n" . 'string' . chr(012) . 'was ' . 'made ' . 'with concatenation.' . "<br/>\n";

//echo: concatenation characters to create a picture
$str = chr(240) . chr(159) . chr(144) . chr(152);
echo $str . "<br/>";

//echo: if $some_var exists output true, else false.
$some_var = 'hola';
echo $some_var ? 'true': 'false', "<br/>\n";
// isset => if $name is declared and is different than null.
echo "Sum: ", 1 + 2, "<br/>";
echo "Hello ", isset($name) ? $name : "John Doe", "!", "<br/>";

//print: Output a string, only returns 1, ALWAYS.

//print a string with or without parantheses
print("This is my first print. <br/>");
print "This is my first print. <br/>";

//print multiple lines
print "This <br/>
is <br/>
my cat. <br/>";

//print anything inside " "
print "This is \"my cat\".<br/>";

//print a variable
$name = "Breogán";
print $name . "<br/>";
print "His name is $name.<br/>";

//print with single quotes
print 'His name is $name.<br/>';

//print: if $some_var exists output true, else false.
$some_var = 'hola';
($some_var) ? print 'true' : print 'false';

//print an array
$array = array("value" => "two");
print "<br/>\n This is {$array["value"]}.<br/>";

//print "here document"
$variable = "variable";
print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;

//IMPORTANT: The major differences to print are that echo accepts an argument list and doesn't have a return value.



?>