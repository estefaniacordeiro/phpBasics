<?php

//echo: Output one or more strings.
echo "This is my first echo <br/>";

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
print "His name is $name .<br/>";

//print with single quotes
print 'His name is $name.<br/>';

//print an array
$array = array("value" => "two");
print "This is {$array["value"]}.<br/>";

//print "here document"
$variable = "variable";
print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;




?>