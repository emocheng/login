<?php
require("config.php");

define("APP_PATH", getcwd());

// smarty 配置
require('include/smarty/Smarty.class.php');

class My_Smarty extends Smarty {
   function __construct()
   {
        parent::__construct();

        //模板的路径
        $this->setTemplateDir(APP_PATH.'/templates/');

        //编译模板位置
        $this->setCompileDir(APP_PATH.'/templates/templates_c/');

        //配置文件路径
        $this->setConfigDir(APP_PATH.'/templates/configs/');

        //缓存路径
        $this->setCacheDir(APP_PATH.'/templates/cache/');

        $this->left_delimiter = "{{";
        $this->right_delimiter = "}}";
   }
}
session_start();

$s = new My_Smarty();

/**
 * 调试函数
 * @param $arr
 */
function dump($arr) {
    if(is_array($arr)) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    } else {
        echo $arr;
    }
}


function fetch_all($sql){
    $result = mysql_query($sql);
    $array = array();
    while($row = mysql_fetch_array($result)){
        $array[] = $row;
    }
    
    return $array;
}

function num_rows($sql){
  $result = mysql_query($sql);
  $num = mysql_num_rows($result);
  return $num;
}
function fetch_one($sql){
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
  return $row;
}

function clearSession(){  
  $_SESSION=array();
  if(isset($_COOKIE[session_name()])) {
    setcookie(session_name(), "", time()-3600, "/");
}
}

function check_login($post){
    $ip = $_SERVER["REMOTE_ADDR"];//获取本机ip
    $username = $post['username'];
    $password = $post["password"];
    $time = time();
    

    //2. 失败了,是否有ip记录?
    $sql = "select * from login where ip = '$ip'";

    //如果有ip记录
    if(num_rows($sql) > 0) {
        $ip = fetch_one($sql);

        //错误次数
        $ip_error_num = $ip["error"];
        //第一次登陆的时间
        $ip_time = $ip["time"];

        //如果小于3次
        if($ip_error_num < 3) {
            if(do_login($post)) {
                return 1;
            } else {
            //验证失败, 错误加1, 返回失败
                mysql_query("update login set `error` = `error`+1 where ip = '$ip[ip]'");
                return 2;
            }
        } else {
            //如果大于3次

            //时间小于30分钟
            if($time < $ip_time+60) {
                return 0;
            }

            //如果时间大于30分钟
            mysql_query("update login set `error` = 0 where ip = '$ip[ip]'");

            //验证通过, 返回成功
            if(do_login($post)) {
                return 1;
            }

            //验证失败, 错误加1, 返回失败
            mysql_query("update login set `error` = `error`+1, time='$time' where ip = '$ip[ip]'");
            return 2;
        }
    } else {
        //如果登陆成功, 插入ip地址,和登陆
        if(do_login($post)){
            return 1;
        } 
        
        mysql_query("insert into login (ip,time,error) values ('$ip', '$time', 1)");
        return 2;
        
    }
}


//1. 如果登陆成功!
function do_login($post){
    $ip = $_SERVER["REMOTE_ADDR"];//获取本机ip
    $username = $post['username'];
    $password = $post["password"];

    $num = num_rows("select * from admin where name = '$username' and password = '$password'");
    if($num >0) {
        mysql_query("delete from login where ip = '$ip'");
        return 1;
    }

    return 0;
}
