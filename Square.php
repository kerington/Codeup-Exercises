<?php

require_once "Rectangle.php";

class Square extends Rectangle {

	public function _construct($height) {
		parent::_construct($height, $height);
	}

// a method named area() that returns the area based on the height and width.
	public function perimeter() {
		return $this->height * 4;
	}

	public function area() {
		return $this->height * $this->height;
	}

}


// DONE Open the file Square.php from the previous lesson in your Sublime Text editor.

// DONE Update the Square class to override the parent's constructor by only accepting one attribute (height) and using that to set both $width and $height in your class.

// DONE Update the constructor in Square to instead pass height on to the parent's constructor.

// DONE Add a perimeter() method to your Rectangle class, and an area() method to your Square class. Neither of these should call a parent. Which method is overriding? Which one is a base method?

// DONE Update your shapes_test.php to test the methods in both your Square class and your Rectangle class.