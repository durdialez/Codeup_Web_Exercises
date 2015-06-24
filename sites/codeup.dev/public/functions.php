<?php 
 function funcName()
 {
 	// Typically use return in functions but for now echo will print it out for us
 	return "Hello World!";
 }

 echo funcName() . PHP_EOL;

 //  Or in html      echo funcName() . "<br>";

 function sayHello($name)
 {
 	return "Hello $name!";
 }

// String 'Daniel' passes as $name
echo sayHello('Daniel') . PHP_EOL;


function helloFirstLast($fName, $lName)
{
	return "Hello $fName $lName";
}

// $firstName and $lastName are named after fName and Lname
echo helloFirstLast("Daniel", "Urdialez");

 ?>