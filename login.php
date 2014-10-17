<?php
require("common.php");
$ip = $_SERVER["REMOTE_ADDR"];//获取本机ip
$time = time();
$chet = "select * from login where ip = '$ip'";
$error_num = fetch_one($chet);
$error = $error_num['error'];



if(@$_GET["action"]=="login"){
	$username = $_POST['username'];
	$password = $_POST["password"];
	$sql = "select * from admin where name = '$username' and password = '$password'";
	$num = num_rows($sql);

	if($num >0){
		$user = fetch_one($sql);
		$_SESSION["user"] = $user;
		
		$_SESSION["isLogin"] = "1";
		header("Location:admin.php");
		}else{
			 
			 
			 $chet_num = num_rows($chet);


			if($chet_num>0){
				$error++;
				echo $error;
				mysql_query("update login set error ='$error' where ip = '$ip'");
				
				 if($error_num['error']>1){
				 	
				 	$time_1 = time()+1800;
				 	//30分钟不让登陆操作
				 	mysql_query("delete from login where ip = '$ip'");
				 }
			
			}else{
				$error = 1;
				mysql_query("insert into login(ip,time,error)values('$ip', '$time', '$error')");
			}
			
		}
	}

	if(@$_GET["action"]=="logout") {
		clearSession();

	}
	if(@$_SESSION["isLogin"]){
	header("Location:admin.php");

}
		$s->display("index.html");

 
