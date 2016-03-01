<?php

$a = 50;
$b = 20;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

echo add($a, $b) . PHP_EOL;
echo subtract($b, $a) . PHP_EOL;
echo multiply(5, 5) . PHP_EOL;
echo divide(25, 5) . PHP_EOL;
echo modulus(50, 5) . PHP_EOL;
