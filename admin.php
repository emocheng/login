<?php
require("common.php");
if(@$_COOKIE["isLogin"]){

	echo'您好:'.$_COOKIE["username"].',&nbsp;&nbsp;';
	echo '<a href="login.php?action=logout">退出</a>';
}
else{
	//如果用户没有通过身份验证
    //页面跳转至登录页面
    header("Location:login.php");

    //终止程序继续执行
    exit;
}
$s->display("admin.html");



