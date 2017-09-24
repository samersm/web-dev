<?php
	echo "This is PHP!";
	$test="I'm a variable!";
	$test2="Me too!";
	$number=75;
	$name="what";
	$a="name";
	echo $test.$test2;
	echo $number/3;
	echo "My name is $name";
	echo $$a;
	
	$myArray=array("pizza", "chocolate", "coffee");
	print_r($myArray);
	echo $myArray[2];
	
	echo "<br /><br />";
	
	$anotherArray[0]="pizza";
	$anotherArray[2]="yoghurt";
	print_r($anotherArray);
	
	echo "<br /><br />";
		
	$thirdArray=array(
		"france" => "french",
		"USA" => "English",
		"Germany" => "German"
	);
	print_r($thirdArray);
	
	$anotherArray[]="salad";
	echo "<br /><br />";
	print_r($anotherArray);
	
	echo "<br /><br />";
	//might not working code.	
	unset($thirdArray["Germany"]);
	print_r($thirdArray);
	
	echo "<br /><br />";
	$anotherNumber=1;
	
	if ($anotherNumber==1) {
		echo "True!";
	} else {
		echo "False!";
	}
	echo "<br /><br />";
	$ex1stNumber=1;
	$ex2stNumber=2;
	$ex3stNumber=2;
	
	if ($ex3stNumber==$ex2stNumber or $ex1stNumber==$ex2stNumber) {
		echo "True!";
	} else {
		echo "False!";
	}
	
	echo "<br /><br />";
	
	/*for ($i=1; $!<=10; $!++) {
		echo $!. "<br />";
	}*/
	$array=array("cat", "dog", "bird", "kangaroo");
	foreach ($array as $key => $value) {
		echo "Key: $key Value: $value <br />";
	}
	
	echo "<br /><br />";
	//not working code.
	/*$!e=0;
	$ex1array=array("apple", "banana", "grape");
	while ($ex1array[$!e]) {
	echo $ex1array[$!e];
	$!e++;
	}*/
	
	//the rest is in my local files.
	//I didn't write anything in lecture 10. but it's important lecture. 
	
	/*print_r($_post);
	
	if ($_GET["submit"]) {
		if ($_GET["name2"]) {
			echo "Your name is ".$_GET(['name2'];
	} else {
			echo "please enter your name";
			}*/
		
	
	
?>