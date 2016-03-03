<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
	

function TrueorFalse($names, $key) {
	
	if (array_search($key, $names) !== false ) {
		
		// echo is_array($names);
		return ((bool)$names) ? 'true' : 'false' . "\n";
		
	}
		


}

function CompareArrays($names, $compare) {
	
 $common = 0;
 foreach ($names as $name) {
 	if (array_search($name, $compare) !== false) {
		$common++;
	
	}
		

 } return "\n" . $common . "\n";

}

echo TrueorFalse($names, 'Dana');
echo CompareArrays($names, $compare);