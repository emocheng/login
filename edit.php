<?php
require("common.php");
require("isLogin.php");
$user_id = $_SESSION["user"]["id"];
$time = time();
if($_POST){
	$re_id =$_POST["re_id"];
	$title = $_POST["title"];
	$content = $_POST["content"];
	mysql_query("insert into content (send,recive,title,content,time) 
		values ('$user_id', '$re_id', '$title', '$content', '$time')");
	header("Location:admin.php");
}



$recive = fetch_all("select * from admin where id != '$user_id'");
$s->assign("recive", $recive);

$s->display("edit.html");