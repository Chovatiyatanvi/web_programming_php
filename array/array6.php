<?php
 $country=array("Denmark" =>"Copenhagen","France"=>"Paris","Japan"=> "Tokyo","South Korea"=>"Seoul","Swaziland"=>"Mbabane");
 $count=count($country);
 foreach($country  as $key=>$value)
{
	echo $key."=".$value;
	echo"<br>"; 
}
?>