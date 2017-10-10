<?php
$items = array ();
for ($i <10; $i++) {
$items [$i] = " This nis a message $i";
}
header ('CONTENT-tYPE: application/json');
$jsonoutput = json_encode($items);
echo $jsonoutput;
