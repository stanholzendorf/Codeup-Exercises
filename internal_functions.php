<?php

// TODO: Create your inspect() function here

function inspect ($para) {
	
	if (is_null($para)) {
		$para1 = gettype($para);
		return "This value is $para1\n";
	} else if (is_bool($para)) {
		if ($para == true) {
			$para1 = gettype($para);
			return "This $para1 is TRUE\n";
		} else {
			$para1 = gettype($para);
			return "This $para1 is FALSE\n";
		  }
		
	  } else if (is_string($para) && empty($para)) {
	  	
	  		$para1 = gettype($para);
	  		return "This $para1 is an empty String\n";
	  	
	  	  

	  } else if (is_array($para)) {
	  	if (empty($para)) {
	  		return "This value is an empty array\n";
	  	} else {
	  		$para1 = gettype($para);
	  		return "This value is an $para1\n";
	  	 }
	  }

		else {
		$para1 = gettype($para);
			return "This $para1  is $para\n";
		}	
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;
