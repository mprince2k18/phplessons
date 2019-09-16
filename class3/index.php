<?php

//Marks
echo "Marks <br><br>";


$marks	=	100;

if($marks >= 80 && $marks <= 100){
	echo "Congratulation, You got A+.";
}
elseif ($marks >= 79 && $marks <= 70) {
	echo "Congratulation, You got A.";
}
elseif ($marks >= 69 && $marks <= 60) {
	echo "Congratulation, You got A-.";
}
elseif ($marks >= 59 && $marks <= 50) {
	echo "Congratulation, You got B.";
}
elseif ($marks >= 49 && $marks <= 40) {
	echo "Congratulation, You got C.";
}
elseif ($marks >= 39 && $marks <= 33) {
	echo "Congratulation, You got D.";
}
else{
	echo "Congratulation, You've failed.";
}


echo "<br>";

//switch

$total = 32;

switch ($total) {
		case $total <= 100 && $total >= 80:
			echo $total . " " . "A+ mark";
			break;

		case $total <= 79 && $total >= 70:
			echo $total ." " . "A mark";
			break;

		case $total <= 69 && $total >= 60:
			echo $total ." " . "A- mark";
			break;

		case $total <= 59 && $total >= 50:
			echo $total ." " . "B mark";
			break;

		case $total <= 49 && $total >= 40:
			echo $total . " " ."C mark";
			break;

		case $total <= 39 && $total >= 33:
			echo $total ." " . "D mark";
			break;
	
	default:
		echo "You are failed";
		break;
}

echo "<br>";

//practise

$age	=	20;
$gender	=	"male";


if($age	=	20	&&	$gender	=	"male"){
	echo "You are tweenty now";
}
else{
	echo "You are not tweenty now";;
}


echo "<br>";

//practise

$ages	=	18;


if ($ages	>=	15	&& $ages	<=	18) {
	echo "You are teen";
}

elseif ($ages	>=	19	&& $ages	<=	35) {
	echo "You are Adult";
}

elseif ($ages	>=	36 && $ages	<=	50) {
	echo "You are Semi - Adult";
}

elseif ($ages	>=	50	&& $ages	<=	80) {
	echo "You are old";
}
else{
	echo "please choose any age";
}








?>