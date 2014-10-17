<?php
if(@$_SESSION["isLogin"]){

	$info = '您好:'.$_SESSION["user"]["name"].',&nbsp;&nbsp;';
	$info.= '<a href="login.php?action=logout">退出</a>';
	$s->assign("info", $info);

} else{
	//如果用户没有通过身份验证
    //页面跳转至登录页面
    header("Location:login.php");

    //终止程序继续执行
    exit;
}