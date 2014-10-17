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


session_start();