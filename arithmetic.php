<?php

$a = 50;
$b = 20;

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    	
    	} else {
        
        return throwErrorMessages($a, $b);
    }

    return $a + $b;
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    	
    	} else {
        
        return throwErrorMessages($a, $b);
    }

    return $a - $b;
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    	
    	} else {
        
        return throwErrorMessages($a, $b);
    }

    return $a * $b;
}

function divide($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        
        if ($b == 0) {
        	return throwErrorMessages($a, $b, "Zero");
        }
        return $a / $b;
    	
    	} else {
        
        return throwErrorMessages($a, $b);
    }

    return $a % $b;
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        
        if ($b == 0) {
        	return throwErrorMessages($a, $b, "Zero");
        }
        return $a % $b;
    	
    	} else {
        
        return throwErrorMessages($a, $b);
    }

    return $a % $b;
}

function throwErrorMessages($a, $b, $error = 'number') {
	if($error == 'number') {
		return "ERROR: Both arguments must be numbers, your \$a was {$a} and \$b was {$b}\n";
	} else {
		return "Cannot divide by zero";
	}
}

echo add($a, $b) . PHP_EOL;
echo subtract($b, $a) . PHP_EOL;
echo multiply(25, 10) . PHP_EOL;
echo divide(25, 0) . PHP_EOL;
echo modulus(50, 5) . PHP_EOL;
