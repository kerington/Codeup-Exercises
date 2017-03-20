<?php



 
 $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($data as $datum) {
    if (is_numeric($datum)) {
        echo "{$datum} is a number\n";
    } else if (is_string($datum)) {
        echo "{$datum} is a string\n";
    }
}