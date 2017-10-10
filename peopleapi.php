<?php

class Person {
var $personID;
var $firstName;
var $lastName;
}
$items = array();

for ($i=0; $i<10; $i++) {
$personrecord = new person();
$persronrecord-> personID = $i;
$personrecord-> firstname = "name $i";
$personrecord->lastName = "LastName $i";  
$items[$i] = $personrecord;
}
 header('Content-Type: application/json');  
$jsonOutput =  json_encode($items); 
echo $jsonoutput;
/>
