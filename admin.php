<?php
require("common.php");
require("isLogin.php");


$user_id = $_SESSION['user']['id'];
$mail_info = fetch_all("select * from content where recive = '$user_id'");
$re_info = fetch_all("select * from content where send = '$user_id'");

foreach ($mail_info as $k => $v) {
	$a = fetch_one("select * from admin where id = '$v[send]'");
	$mail_info["$k"]["name"] = $a["name"];
	
}
foreach ($re_info as $k => $v) {
	
	$b = fetch_one("select * from admin where id = '$v[recive]'");
	$re_info["$k"]["re_name"] = $b["name"];
}



$s->assign("mail_info", $mail_info);
$s->assign("re_info", $re_info);
$s->display("admin.html");





