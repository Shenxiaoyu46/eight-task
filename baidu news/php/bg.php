<?php
$con=mysql_connect("localhost","root","");
$my_db=mysql_select_db("mynewsql",$con) or die("error");
mysql_query("set names 'utf8'");
?>
