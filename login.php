<?php
require("common.php");

if(@$_GET["action"]=="login"){
	//检查是否提交，否则刷新页面也会有影响
	if($_POST){
		$ip = $_SERVER["REMOTE_ADDR"];
		$result = array();
		$type = check_login($_POST);
		if($type ==1){
			$username = $_POST['username'];
			$password = $_POST["password"];
			$user = fetch_one("select * from admin where name = '$username' and password = '$password'");
			$_SESSION["user"] = $user;
			$_SESSION["isLogin"] = "1";
		}

		$result["type"] = $type;
		if($type ==2){
			$error = fetch_one("select error from login where ip = '$ip'");
			$result["error"] = $error["error"];
		}
		echo json_encode($result);
		return;				
	}

}

	if(@$_GET["action"]=="logout") {
		clearSession();

	}
	if(@$_SESSION["isLogin"]){
	header("Location:admin.php");

}
		$s->display("login.html");

 
