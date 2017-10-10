<?php
$items = array ();
for ($i=0; $i<10; $i++) {
$items [$i] = " This is a message $i";
}
header ('Content-Type: application/json');
$jsonoutput = json_encode($items);
echo $jsonoutput;
