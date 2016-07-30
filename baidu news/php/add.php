<?php
include_once("connect.php");
$newstype=$_POST['newstype'];
$newstitle=$_POST['newstitle'];
$newscontent=$_POST['newscontent'];
$content_url=$_POST['content_url'];
$imgurl=$_POST['imgurl'];
$newsfrom=$_POST['newsfrom'];
$date=$_POST['date'];

$sql="insert into newslist (`newstype`,`newstitle`,`newscontent`,`content_url`,`imgurl`,`newsfrom`,
	`date`) values ('$newstype','$newstitle','$newscontent','$content_url','$imgurl','$newsfrom','$date')";
$query=mysql_query($sql);
echo $query;
?>