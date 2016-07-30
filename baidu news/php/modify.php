<?php
include_once("bg.php");
$newsid=$_POST['newsid'];
$newstitle=$_POST['newstitle'];
$newscontent=$_POST['newscontent'];
$content_url=$_POST['content_url'];
$imgurl=$_POST['imgurl'];
$newsfrom=$_POST['newsfrom'];
$date=$_POST['date'];
if ($newsid=="") {
	die("没有属于该id的新闻");
}else{
	
$sql="UPDATE newslist SET newsid='$newsid',newstitle='$newstitle',newscontent='$newscontent',content_url='$content_url',imgurl='$imgurl',date='$date',newsfrom='$newsfrom' WHERE newsid='$newsid'";
 mysql_query($sql);
}


?>