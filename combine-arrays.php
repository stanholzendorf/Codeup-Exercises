<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
	



function combine_arrays($names, $compare) {
	$combinedArray = [];



	foreach ($names as $key => $name) {
		// array_unshift($combinedArray, $name);
		if ($names[$key] == $compare[$key]) {
			// $combinedArray[] = $names[$key];
			array_push($combinedArray, $names[$key]); 

		} else {
			// $combinedArray[] = $names[$key];
			array_push($combinedArray, $names[$key]);
			// $combinedArray[] = $compare[$key];
			array_push($combinedArray, $compare[$key]);
		}
		
	}



	print_r($combinedArray);
}

echo combine_arrays($names, $compare);



