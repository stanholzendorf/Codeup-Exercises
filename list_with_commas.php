<?php

$physicistsArray = [];
$famousFakePhysicists = humanizedList($physicistsArray);
function humanizedList($physicistsArray, $alpha = false) {

	$physicistsString = ' Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
	$physicistsArray = explode(',', $physicistsString);
	$tony = array_pop($physicistsArray);
	if ($alpha === true){
		sort($physicistsArray);
	}
	$physicistsString = implode(',', $physicistsArray);
	return "{$physicistsString} and{$tony}!\n";

}


// $physicistsString = ' Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// $physicistsArray = explode(',', $physicistsString);

echo "Some of the most famous fictional theoretical physicists are{$famousFakePhysicists}";








