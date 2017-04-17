<?php 
// 2. In this new file, create a class named Rectangle that contains

// the properties $height and $width
class Rectangle {

	private $height;
	private $width;

// a constructor to set the height and width on instantiation
	public function _construct($height, $width) {
		$this->height = $height;
		$this->width = $width;
	}

// a method named area() that returns the area based on the height and width.
	public function area() {
		return $this->height * $this->width;
	}

	public function perimeter() {
		return 2 * $this->height + 2 * $this->width;
	}
}



// DONE Update the Rectangle class from the previous lesson to contain private properties for height and width.

// Before testing the Rectangle and Square classes, try to think of the outcomes before executing. Will the Rectangle class work as before? What about the Square class? Create objects from both classes and execute the area() method. Did the result meet your expected outcome?

// Update the height and width properties of the Rectangle class to have a visibility of protected. Repeat the previous step. Did the result meet your expected outcome this time?

// Change the visibility back to private for both properties. Create the necessary getters and setters for the Rectangle and Square classes to work as desired with only private properties.

// Open your Log.php in Sublime. Refactor this class to:

// limit the visibility of the $handle and $filename properties.
// using setters, ensure that the filename is a string
// ensure that users cannot manipulate $handle once the object is instantiated.
// Bonus: In your setter for $filename, use a combination of touch() and is_writable() to ensure you can write to the specified location. What do you think you class should do if this fails?


?>