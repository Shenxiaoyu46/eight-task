<?php
header("Content-type: application/json;charset=utf-8");
include_once("bg.php");
$newsid=$_POST['newsid'];

	$sel="SELECT * FROM `newslist` WHERE `newsid` ='$newsid'";
	$query = mysql_query($sel);
	if ($query && mysql_num_rows($query)) {
 	while ($row = mysql_fetch_assoc($query))
   {
   	$data[]=$row;
   }  

 }
    $jsondata=json_encode($data,JSON_UNESCAPED_UNICODE);
   	echo $jsondata;


 
?>