<?php
 $country=array("Denmark" =>"Copenhagen","France"=>"Paris","Japan"=> "Tokyo","South Korea"=>"Seoul","Swaziland"=>"Mbabane");
 $count=count($country);
 if(array_key_exists("France",$country)){
	 echo $country['France']." key exists ";
	 echo "<br>";
 }
 else{
	 echo "key does not exists";
 }

?>
