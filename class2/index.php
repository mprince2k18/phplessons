<?php


echo "<h2>Class 2</h2>";


//Arithmatic operators


//addition
$numberOne 	=	10;
$numberTwo	=	25;
$addSum	=	$numberOne + $numberTwo;

echo "Addition $addSum <br>";


//substraction
$numberThree 	=	40;
$numberFour	=	35;
$subsSum	=	$numberThree - $numberFour;

echo "Substraction $subsSum <br>";


// division
$numberFive 	=	100;
$numberSix	=	25;
$divSum	=	$numberFive / $numberSix;

echo "Division $divSum <br>";


// multiply
$numberSeven 	=	40;
$numberEight	=	5;
$multiSum	=	$numberOne * $numberTwo;

echo "Multiply $multiSum <br>";




//increment

$preIncrement	=	14;
echo "PreIncrement " . ++$preIncrement . "<br>"; //pre //1 + 14 = 15

$postIncrement	=	49;
echo "PostIncrement " .$postIncrement++ . "<br>"; //post //print the value first then increment
echo "PostIncrement " .$postIncrement++ . "<br>"; // 49 + 1 = 50



//decrement

$preDecrement	=	30;
echo "PreDecrement " . --$preDecrement . "<br>"; //pre //1 - 30 = 29

$postDecrement	=	49;
echo "PreDecrement " .$postDecrement-- . "<br>"; //post //print the value first then increment
echo "PreDecrement " .$postDecrement-- . "<br>"; // 49 - 1 = 48


//line break

function lineBreak(){
	echo "<br>";
}



//Assignment Operators



function assignOperator($o , $p){
	$q =	$o + $p;
	echo var_dump($q);
	lineBreak();
//Addition
	$q +=	$p;
	echo var_dump($q);
	lineBreak();
//Subtraction
	$q -=	$p;
	echo var_dump($q);
	lineBreak();
//Multiplication
	$q *=	$p;
	echo var_dump($q);
	lineBreak();
//Division
	$q /=	$p;
	echo var_dump($q);
	lineBreak();
//Modulus
	$q %=	$p;
	echo var_dump($q);
	lineBreak();
}

assignOperator(10 , 50);


//Comparison Operators

function compOperator($k , $l){

//Equal
	echo var_dump($k == $l);
	lineBreak();
//Identical
	echo var_dump($k === $l);
	lineBreak();
//Not equal	
	echo var_dump($k != $l);
	lineBreak();
//Greater than
	echo var_dump($k > $l);
	lineBreak();
//Less than
	echo var_dump($k < $l);
	lineBreak();
//Greater than or equal to	
	echo var_dump($k >= $l);
	lineBreak();
//Less than or equal to	
	echo var_dump($k <= $l);
	lineBreak();
//Not identical	
	echo var_dump($k !== $l);
	lineBreak();

}

compOperator(30 , 40);

//SUPERGLOBAL


//localVariable
function localVariable(){
	$n = "Linkin";
	$m = "Park";

	echo $band	=	$n . " " . $m;
	lineBreak();

}

localVariable();

//globals
$g = 13;
$h = 23;

function globalVariables($str){
	$GLOBALS['f']	=	$GLOBALS['g']	+	$GLOBALS['h'];
	echo $str . $GLOBALS['f'];
	lineBreak();
}

globalVariables("Globals: ");


//constant
define("PRINCE", 1996);

function constantSum($cons){
	echo PRINCE + $cons;
}
constantSum(50);
lineBreak();


//String Functions


function strFunction($text){
	//strlen
	echo strlen($text);
	lineBreak();
	//str_word_count
	echo str_word_count($text);
	lineBreak();
	//strrev
	echo strrev($text);
	lineBreak();
	//strpos
	echo strpos($text, "o");
	lineBreak();
	//str_replace
	echo str_replace("World", "Prince", $text);
	lineBreak();
	//addcslashes
	echo addcslashes($text , "W");
	lineBreak();
	//addcslashes
	echo md5($text);
	lineBreak();
	
}
strFunction("Hello World");


//exercise

function pracrise($repWord,$replace){

	echo str_replace($replace, $repWord, "I am going to ".$replace);
	lineBreak();
}
pracrise("Dortmund","Dhaka");

//explode

function explotion($text1){
	print_r (explode(" ",$text1));
}
explotion("What a Sunny day!");















?>

