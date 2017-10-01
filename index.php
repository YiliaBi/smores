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

$student = array("Sara"=>"70", "Peter"=>"85", "Max"=>"80" );
$obj->printArray($student);
$obj->array_chunk($student);
$obj->array_column($student);
$obj->array_push($student);
$obj->array_merge($student);
$obj->array_rand($student);
$obj->arsort($student);
$obj->array_sum($student);
$obj->array_fill($cor);
$obj->range($num);


class main{

     public function __construct() {

	echo '<h1>20 string and array function</h1></br>';
	}	

public function printthis($name) {
	echo '<h1>print function</h1>';
	print($name);
	echo '<hr>';
	}

public function strl($name) {
	echo '<h1>Get string length</h1>';
	echo ($name);
	echo '<br>';
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
	echo '</br>';
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
	echo '<h1>Make the string\'s first character uppercase</h1>';
	echo ($name); 
	echo '</br>';
	echo ucfirst($name);
	echo '<hr>';
	}

public function printArray($student) {
	echo '<h1>Print an array</h1>';
	print_r ($student);
	echo '<hr>';
	}

public function array_chunk($student) {
	echo '<h1>Split an array into chunks</h1>';
	print_r(array_chunk($student, 2));
	echo '<hr>';
	}

public function array_column($student) {
	echo'<h1>Return the values into a column</h1>';
	$records = array(
	array(
	     'name' => 'Sara',
	      'grade' => 70,
	      'ID' => 101,
	     ),
	array(
	     'name' => 'Peter',
	     'grade' => 85,
	     'ID' => 102,
	     ),
	array(
	     'name' => 'Max',
	     'grade' => 80,
	     'ID' => 103,
	     )
	);

	$Grade = array_column($records, 'grade', 'ID');
	print_r($Grade);
	echo '<hr>';
	}

public function array_push($student) {
	echo '<h1>Push one element onto the end</h1>';
	array_push($student, array("Mike"=>"70"));
	print_r($student);
	echo '<hr>';
	}

public function array_merge($student) {
	echo '<h1>Merge two arrays</h1>';
	$student1 = array("Zac"=>"90", "Tara"=>"75", "Amy"=>"80");
	print_r(array_merge($student, $student1));
	echo '<hr>';
	}
public function array_rand($student) {
	echo '<h1>Pick two random entries out of an array</h1>';
	print_r(array_rand($student, 2));
	echo '<hr>';
	}

public function arsort($student) {
	echo '<h1>Sort an array in reverse order</h1>';
	arsort($student);
	foreach ($student as $key => $val){
	echo "$key = $val". "<br>";
	}
	}

public function array_sum($student) {
	echo '<h1>Return the sum of all the values in an array</h1>';
	echo array_sum($student);
	echo '<hr>';
	}
public function array_fill($cor) {
	echo'<h1>Fill an array with values</h1>';
	$cor = array_fill(3, 3, 'yellow');
	print_r($cor);
	echo '<hr>';
	}
public function range($num) {
	echo '<h1>Create an array containing a range of elements</h1>';
	$num = range(0, 100, 10);
	print_r ($num);
	echo '<hr>';
	}

public function __destruct() {
	echo 'end';

	}
	}
?>

