<?php

//This file as its name properly indicates will be used for working with the different basic types of variables and data:
//Define a new variable and assign a value to each of the following types:

//boolean
$boolean = true;
var_dump($boolean);
echo '<br>';

//integer
$int = 11;
var_dump($int);
echo '<br>';

//float
$float = 11.111;
var_dump($float);
echo '<br>';

//string
$sun = 'Sun';
var_dump($sun);
echo '<br>';

//array
$array = array('one','two', 'three');
var_dump($array);
echo '<br>';

//object
class ClassObject {
    public $num = 10;
}
$obj = new ClassObject;
var_dump($obj);
echo '<br>';

class ClassObject2 {
    public $pepito = 'bye';
}
$pepito = new ClassObject2;
var_dump($pepito);
echo '<br>';

//NULL
$n = null;
var_dump($n);

?>