<?php

$obj = new main();
$name = "south mountain";
$obj->printthis($name);
$obj->strl($name);
$obj->substr($name);
$obj->strpos($name);
$obj->ltrim($name);
$obj->str_shuffle(str);
$obj->explode($sen);
$obj->number_format($salary);
$obj->round($nub);
$obj->ucfirst($name);


class main{

     public function __construct() {

echo '20 string and array function</br>';
}

public function printthis($name) {
echo '<h1>print function</h1>';
print($name);
echo '<hr>';
}

public function strl($name) {
echo '<h1>Get string length</h1>';
echo ($name);
echo strlen($name);
echo '<hr>';
}

public function substr($name) {
echo '<h1>Return part of a "south mountain"</h1>';
echo substr("south mountain", 5);
echo '<hr>';
}

public function strpos($name) {
echo '<h1>Find the position of the first occurrence of "mountain" in "south mountain"</h1>';
$i = strpos($name, 'mountain');
echo ($i);
echo '<hr>';
}

public function ltrim($name) {
echo '<h1>Strip whitespace from the beginning of a string</h1>';
echo ($name); 
$text = ltrim($name, "south");
echo ($text);
echo '<hr>';
}

public function str_shuffle($str) {
echo '<h1>Randomly shuffles a string</h1>';
$str = 'abcdefg';
echo ($str);
echo '</br>';
$shuffled = str_shuffle($str);
echo $shuffled;
echo '<hr>';
}
public function explode($sen) {
echo '<h1>Split the string </h1>';
$sen = "I like mango so much.";
echo ($sen);
echo '</br>';
print_r (explode(" ",$sen));
echo '<hr>';
}

public function number_format($salary) {
echo '<h1>Format the  number with grouped thousands</h1>';
$salary = '390050000';
echo ($salary);
echo '</br>';
echo number_format($salary);
echo '<hr>';
}

public function round($nub) {
echo '<h1>rounds the floating-point number</h1>';
echo '0.6, 0.5</br>';
echo (round(0.6) . '</br>');
echo (round(0.5));
echo '<hr>';
}

public function ucfirst($name) {
echo '<h1>Make the string's first character uppercase</h1>';
echo ($name); 
echo '</br>';
echo ucfirst($name);
echo '<hr>';
}



public function __destruct() {
echo 'end';

}
}
?>

