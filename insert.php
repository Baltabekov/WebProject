<?php
$db=mysql_connect('localhost','root','toor');
mysql_select_db('project');
mysql_query("SET NAMES utf8");
mysql_query("INSERT INTO 'news' (title,text) VALUES ('".$_POST['title']."','".$_POST['text']."')");
?>