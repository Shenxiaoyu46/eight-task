<?php
include("index.php");
if ($_POST['submit']) {
	$sql="insert into news (`newsid`,`newstitle`,`newscontent`,`imgurl`,`newsfrom`,`date`).VALUES ('','$_POST[newstitle]','$_POST[newscontent]','$_POST[imgurl]','$_POST[newsfrom]','$_POST[date]')"
}
?>
<meta charset="utf-8">
<form action="index.php" method="post">
标题：<input type="text" name="newstitle"><br/>
内容：<input type="text" name="newscontent"><br/>
图片地址：<input type="text" name="imgurl"><br/>
新闻来自：<input type="text" name="newsfrom"><br/>
日期：<input type="text" name="date"><br/>
<input type="submit" name="submit" value="提交">


</form>