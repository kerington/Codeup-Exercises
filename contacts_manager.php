<?php

//THIS FUNCTION IS TO READ THE FILE, GIVE YOU THE INFO, AND SPLIT UP THE NAME AND NUMBER!
function parseContacts($file) {
    	$contacts = array();
		$filename = $file;
		$handle = fopen($filename, 'r');
		$contents = trim(fread($handle, filesize($filename)));
		$contentsArray = explode("\n", $contents);
		fclose($handle);
		// echo($contents);

		foreach ($contentsArray as $key => $content) {
			$contactInfo = explode ("|", $content );
			$contacts[$key][0] = $contactInfo[0];
			$contacts[$key][1] = $contactInfo[1];
		}

    return $contacts;
}

// var_dump(parseContacts('contacts.txt'));


//THIS FUNCTION SHOWS ALL CONTACTS
function showAllContacts($contactsArray) {
	foreach ($contactsArray as $key => $content) {
		echo "|" . $content[0] . " | " . $content[1] . "|" . PHP_EOL;
	}
	// echo $contactsArray[0][0];
}

// showAllContacts($results);



//THIS FUNCTION ALLOWS THE USER TO ADD A CONTACT
function addAContact($contactName, $phoneNumber, $filename) {
	$handle = fopen($filename, 'a');
    fwrite($handle, PHP_EOL . $contactName . "|" . $phoneNumber);
	fclose($handle);
}

//THIS FUNCTION ALLOWS THE USER TO SEARCH FOR A CONTACT
// function findAContact(){
// 	foreach ($contactsArray as $key => $contact) {
// 		if (array_search($findAContact, $contactsArray) !== false) {
// 			return true
// 		} else {
// 			return false
// 		}
// 	}
// }

//THIS FUNCTION ALLOWS USER TO DELETE A CONTACT
fwrite(STDOUT, "Which contact would you like to delete?\n")
$deleteAContact = strtolower(trim(fgets(STDIN)));
$result = false;
foreach ($contentsarray as $key => $contact){
		if(strpos(strtolower($contact), $searchDelete) !== False){
			$result = $key;
			$resultName = $contact;
			break;
		}
}

mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )

//THIS IS THE MAIN MENU
function mainMenu($file) {
	fwrite(STDOUT, "\n--MAIN MENU--" . PHP_EOL);
	fwrite(STDOUT, "1. Show all contacts." . PHP_EOL);
	fwrite(STDOUT, "2. Add a new contact." . PHP_EOL);
	fwrite(STDOUT, "3. Find contacts by name." . PHP_EOL);
	fwrite(STDOUT, "4. Delete an existing contact." . PHP_EOL);
	fwrite(STDOUT, "Exit. Enter an option (1, 2, 3, 4, or 5)" . PHP_EOL);
	$input = trim(fgets(STDIN));
	switch($input) {
		case 1:
			$result = parseContacts($file);
			showAllContacts($result);
			break;
		case 2:
			fwrite(STDOUT, "Enter name for new contact.");
			$askingName = fgets(STDIN);
			fwrite(STDOUT, "Enter number for new contact.");
			$askingNumber = fgets(STDIN);
			addAContact($askingName, $askingNumber, $file);
		case 3:
		findAContact();
		case 4:
		deleteAContact();
		// case 5:
		// exitContacts();
		break;
	}
}

//THIS CONNECTS THE contacts.txt FILE TO THE MAIN MENU FILE (USING THE VARIABLE $file TO CONNECT THE TWO)
mainMenu('contacts.txt');


// -------------------------------------------------------
// Focus on one working component at a time:

// 1) First consider and write down all the functions you think will run the application and pseudo code as much as you can.

// 2) Build a working function to read a passed in file and return it as an array of contacts.

// 3) Build a working show-all-contacts function.

// 4) Build a working show-single-contact function based on a passed-in string.

// 5) Build a working delete function that will remove a single contact.

// 6) Build a working function to take in user input and continue to prompt the user to make a selection of numbers 1-5 if any other input is given.

// 7) Build a working function that continuously runs until the user chooses to exit the application and calls the previous functions based on the user selection.

// 8) Test various bad inputs and solve for them. Eliminate all other detectable bugs.

// 9) Refine the look of your application until the output is formatted cleanly.

// -------------------------------------------------------

// Extra optional instructions for contacts manager application:

// - DONE - Create a function that takes in a file string and returns it as an array (you may choose to reuse the function from the file read exercise).

// - DONE - Create a show all function that takes in an array and echoes out all element / contacts in a clear way to the command line that matches the curriculum.

// - Create a delete function that takes in a file name, an array, and a string that searches each array element for a sub-string of the specified string and if found, rewrites to the specified file with all elements except the element that contains the passed-in string.

// - Create a search function that takes in an array and a string that searches an array for a given substring string and if found in a given element, it will echo out the given element in a way that matches the command line formatting for the show all function.

// - Create a function that continues to prompt the user for a numeric input between 1 and 5 if any other input is given, echoes out what action each selection will yield, and if a valid user input is given, returns the number.

// - Create a run app function that takes in a file name and continues to run until the user gives an input of 5 to exit the application. The function should contain a switch statement to prompt the user for additional inputs and passes in those input values to the appropriate function call for a given selection for each case of the switch statement.

// - Your entire application should run with single call to the runApp($filename) function.

// -------------------------------------------------------

//TODO:

// NOTE WHAT "TRIM" DOES IN PHP NOTES**
