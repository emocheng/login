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

function clearCookies(){  
  setcookie('username','',time()-3600);
  setcookie('isLogin','',time()-3600);
}