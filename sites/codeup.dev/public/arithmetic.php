<?php

$a = 200;
$b = 100;

function add($a, $b)
{
    return $a + $b;
}

echo add(100, 50) . "<br>";

function subtract($a, $b)
{
    return $a - $b;
}

echo subtract(10, 5) . "<br>";

function multiply($a, $b)
{
    return $a * $b;
}

echo multiply(13, 4) . "<br>";

function divide($a, $b)
{
    return $a / $b;
}

echo divide(36, 6) . "<br>";

function modulus($a, $b)
{
	return $a % $b;
}

echo modulus(40, 12) . "<br>";

?>