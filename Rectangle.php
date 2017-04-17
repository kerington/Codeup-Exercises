<?php 
// 2. In this new file, create a class named Rectangle that contains

// the properties $height and $width
class Rectangle {

	public $height;
	public $width;

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







// DONE 3. Create a shapes_test.php file next to Rectangle.php. In shapes_test.php make sure to require_once Rectangle.php.

// DONE 4. Test your new class by creating an instance of Rectangle with various heights and widths. Calling the area method should correctly display the product of height and width. 

// DONE 5. Create a new file named Square.php 

// DONE 6. In this file create a class named Square that extends Rectangle 

// DONE 7. In the new Square class, create a method called perimeter that returns the perimeter of the square. 

// DONE 8. Test your new Square class by creating an instance of Square with various matching height and width. Calling the area() method should correctly display the product of height and width. Invoking the new method perimeter() should display the perimeter of the square. 

// 9. What could we do to ensure the square class was actually computing values for a square? What prevents the height and width from being different? Would it be more beneficial if we could have a different constructor for our Square class?
?>
