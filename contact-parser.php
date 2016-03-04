<?php

function parseContacts($filename)
{
    // $contacts = array();

    // Handel file and get contents and format to array
    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
	$contacts = explode("\n", $contents);
    fclose($handle);
    // Reformat array to spilt into keys from string
    $contacts = implode(',',$contacts);
    $contacts = explode(",",$contacts);
    $contact1 = explode('|',$contacts[0]);
    $contact2 = explode('|',$contacts[1]);
    $contact3 = explode('|',$contacts[2]);
    // Format numbers to add dashes
    $contactString1 = substr_replace($contact1[1], '-', 3, 7); 
    $contactString1a = substr_replace($contact1[1], '-',3, 3);
    $finaleString1 = $contactString1 . $contactString1a;
    $contact1[1] = $finaleString1;
    
    $contactString2 = substr_replace($contact2[1], '-', 3, 7); 
    $contactString2a = substr_replace($contact2[1], '-',3, 3);
    $finaleString2 = $contactString2 . $contactString2a;
    $contact2[1] = $finaleString2;

    $contactString3 = substr_replace($contact3[1], '-', 3, 7); 
    $contactString3a = substr_replace($contact3[1], '-',3, 3);
    $finaleString3 = $contactString3 . $contactString3a;
    $contact3[1] = $finaleString3;
    //Build final array
    $allContacts = array(array('name' => $contact1[0], 'number' => $contact1[1]), array('name' => $contact2[0], 'number' => $contact2[1]),array('name' => $contact3[0], 'number' => $contact3[1]));
    
    return $allContacts;
}
var_dump(parseContacts('contacts.txt'));
