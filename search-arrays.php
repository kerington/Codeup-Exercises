<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
// $searchFor = 'Bob';


// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

		// $result = array_search($searchFor, $names);

		// if ($result !== false) {
		//     echo "true" . PHP_EOL;
		// } else {
		// 	echo "false" . PHP_EOL;
		// }

		// !!!!! CREATED A FUNCTION BUT IT DOESN'T WORK !!!!!
	// function checkArrays($array, $name){
	// 	$result = array_search($searchFor, $names);

	// 	if (aray_search($name, $array) !== FALSE) {
	// 	    return "true" . PHP_EOL;
	// 	} else {
	// 		return "false" . PHP_EOL;
	// 	}
	// }
	// echo checkArrays($names, 'Keri');
	// $res = checkArrays($names, 'Keri');

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function compareArrays($listOfNames, $arrayToCompare){
	$c = 0;
	
	foreach ($listOfNames as $name) {
		if(checkArrays($arrayToCompare, $name)){
			$c++;
		}
	}

return $c;

}

echo "Repeated times:" . compareArrays($names, $compare) . PHP_EOL;
// for each - to go through all the arrays
//return the NUMBER of the name in the array, inc i++ to keep going through.