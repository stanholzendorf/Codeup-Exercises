 <?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
     	echo 'monday' . "\n";
     	break;
         // Output Monday
     case 2:
     	echo 'tuesday' . "\n";
     	break;

     case 3;
     	echo 'wednesday' . "\n";
     	break;

     case 4;
     	echo 'thursday' . "\n";
     	break;

     case 5;
     	echo 'friday' . "\n";
     	break;

     case 6;
     	echo 'saturday' . "\n";
     	break;
     	
     case 7;
     	echo 'sunday' . "\n";
     	break;					
         // Output Tuesday
     // etc through day 7
 }