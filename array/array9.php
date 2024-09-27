<?php
 $country=array("Denmark" =>"Copenhagen","France"=>"Paris","Japan"=> "Tokyo","South Korea"=>"Seoul","Swaziland"=>"Mbabane");
 $count=count($country);
 

foreach($country  as $key=>$value)
{
	
	echo"<br>";
	sort($country);
    
	print_r($key."=".$value);
  
     echo"<br>";
	rsort($country);
    
	print_r($value."=".$key);  echo"<br>";
}
?>