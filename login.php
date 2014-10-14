<?php
require("common.php");

$result = mysql_query("select * from admin");
$row = mysql_fetch_array($result);

if(@$_GET["action"]=="login"){
	clearCookies();
	if($_POST['username']==$row['name']&&$_POST["password"]==$row['password']){
		setcookie("username", $_POST['username'], time()+60*60*24*7);
		setCookie('isLogin', '1', time()+60*60*24*7);
		header("Location:admin/admin.php");
		}else{
			die("用户名或密码错误！");
		}
	} else if(@$_GET["action"]=="logout") {
		clearCookies();
	}
$s->display("index.html");

 
