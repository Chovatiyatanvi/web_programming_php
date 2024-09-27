<?php
$fruit=array("apple","grapes","strawbarry","mango","kiwi");
$count=count($fruit);

$fruit[]="orange";
$fruit[]="pineapple";
unset($fruit[0]);

print_r($fruit);
?>

