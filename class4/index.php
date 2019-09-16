<?php

// loop
// for loop

echo "For loop<br>";

for($x=1;$x<=10;$x++){
	for($y=1;$y<=10;$y++){
		echo "$x x $y" . "=". " ". ($x*$y)."<br><br>";
	}
}

//while loop

echo "While loop<br>";

$a=1;

while($a <=100){
	echo $a."<br>";
	$a++;
	
}

//Do While loop

echo "Do While loop<br>";


$c=0;

do{
	echo $c++."<br>";
}while($c<=10);

//Foreach loop

echo "Foreach loop<br>";


$variable	=	array("Linkin park","Green Day","Metallica","Black Sabbath");

foreach ($variable as $value) {
	echo $value."<br>";
}

// Even & Odd

echo "Even number<br>";

for($o=0;$o<=100;$o+=2){
	echo $o.",";
}
echo "<br>";

echo "Odd number<br>";

for($u=1;$u<=100;$u+=2){
	echo $u.",";
}











 ?>