<?php
header("Content-type: text/html; charset=utf-8");

//连接数据库
$config = array(
"host"=>"localhost",
"db_name"=>"root",
"db_psw"=>"root"
	);

$con = mysql_connect($config["host"],$config["db_name"],$config["db_psw"]);
if(!$con){
	die("连接出现错误");
}
mysql_query("set names utf8");
mysql_select_db("login");

//数组初始化
function dump($arr){
    echo"<pre>";
    print_r($arr);
    echo"</pre>";
}