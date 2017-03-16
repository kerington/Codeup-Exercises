<?php


	for ($a = 1; $a <= 100; $a++) {
	    // echo "{$a}\n";	
		
		if ( $a % 3 == 0 && $a % 5 !=0 ) {
	            echo ("Fizz\n");
	        } elseif ( $a % 5 == 0 && $a % 3 !=0) {
	            echo ("Buzz\n");
	        } elseif ( $a % 15 == 0) {
	            echo ("FizzBuzz\n");
	        } else {
	        echo ("{$a}\n");
	    	}
    } 