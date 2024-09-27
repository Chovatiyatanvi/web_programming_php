<?php
 $country=array("Denmark" =>"Copenhagen","France"=>"Paris","Japan"=> "Tokyo","South Korea"=>"Seoul","Swaziland"=>"Mbabane");
 
 $count=count($country);
 
 $country['Poland']="Warsa";
 foreach($country  as $key=>$value)
{
	
	echo $key."=".$value;
	echo"<br>"; 
}
?>