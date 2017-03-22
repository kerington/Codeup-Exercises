<?php

function parseContacts($filename)
{
    $contacts = array();

		$filename = 'contacts.txt';
		$handle = fopen($filename, 'r');
		$contents = fread($handle, filesize($filename));
		$contentsArray = explode("\n", $contents);
		fclose($handle);

		foreach ($contentsArray as $key => $content) {
			$contactInfo = explode ("|", $content );
			$contacts[$key][0] = $contactInfo[0];
			$contacts[$key][1] = $contactInfo[1];
		}

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));




// missing a loop to go to each element. Then it should explde to have the name and number show on thier own (as in example) *Will be replacing each element with a 2 element array.