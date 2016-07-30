<?php
include_once("bg.php");
$newsid=$_POST["newsid"];
if ($newsid=="") {
	die("没有找到符合该条件的新闻");
}else {
	$newstype=$_POST["newstype"];
	$sql="DELETE FROM newslist WHERE newsid='$newsid'";
    mysql_query($sql);
}


?>