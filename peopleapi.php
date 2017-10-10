<?php

class Person {
var $person ID;
var $firstName;
var $lastName;
}
$items = array();

for ($i=0; i<10; i++); {
$personrecord = new person();
$persronrecord-> person ID = $i;
$personrecord-> firstname = "name $i";
$personRecord->lastName = "LastName $i";  
$items[$i] = $personRecordl;
 header('Content-Type: application/json');  
$jsonOutput =  json_encode($items); 
echo $jsonoutput;
/>
