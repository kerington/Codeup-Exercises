<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($array1, $array2){

	$differences = array_diff($array1, $array2);
	$newnew = array_merge($array2, $differences);
	print_r($newnew);
}
combine_arrays($names, $compare);


//DOESNT WORK
// 	$arrayResult = [];

// 	foreach ($array1 as $key => $name) {
		
// 		if($name == $array2[$key] ){
// 			array_push($arrayResult, $name);
// 		} else {
// 			array_push($arrayResult, $name);
// 			array_push($arrayResult, $array2[$key]);
// 		}
// 	}

// 	return $arrayResult;
// }




// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().
// Test your combine_arrays() function with $names and $compare. The resulting array should look like: