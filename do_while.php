<?php

$number = 0;
do {
echo "\$number is equal to {$number}\n";
$number+=2;
} while ($number <= 100);

$number1 = 100;
do {
echo "\$number is equal to {$number1}\n";
$number1-=5;	
} while ($number1>=0);

$a = 2;
// $b = ($a * $a);
do {
echo "$a\n";	
$a = $a * $a;
} while ($a <= 1000000);
