<?php /* Smarty version Smarty-3.1.20, created on 2014-10-17 16:11:15
         compiled from "/Users/tc/www/login/templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:1443659845440c1fe4fdf98-29687443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f75a77f6990eb7c48a37228ce7be39bdf0e7288' => 
    array (
      0 => '/Users/tc/www/login/templates/login.html',
      1 => 1413533474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1443659845440c1fe4fdf98-29687443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5440c1fe54a7e5_07236875',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440c1fe54a7e5_07236875')) {function content_5440c1fe54a7e5_07236875($_smarty_tpl) {?><html>
<head>
	<meta charset="utf-8"> 
	<title>登陆界面</title>
    <style type="text/css">
        .longin_num{
            margin-top: 10px;
            text-align: center;
            
        }
        .hide{
            display: none;
        }
    </style>
</head>

<body>
	<body>
        <script type="text/javascript" src="jquery-2.1.1.js"></script>
     <!--  以HTML形式输出用户登录表单，提交给本页面 -->
    <table border="1" width="300" align="center" cellpadding="5" cellspacing="0">
        <caption><h1>用户登录</h1></caption>
        <form action="login.php?action=login" method="post">
            <tr>
                <th>用户名</th> 
                <td><input type="text" name="username" class="username" size=25></td>

            </tr>
            <tr>
                <th>密&nbsp;&nbsp;码</th> 
                <td><input type="password" name="password" class="password" size=25></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="登录" class="btn">
                    <input type="reset" value="重置">
                </td>
            </tr>
        </form>
    </table>
    <div class="longin_num"></div>
        <script type="text/javascript">
            $(function(){
                $(".btn").click(function(){
                    //$(".longin_num").removeClass("hide");
                    var username = $(".username").val();
                    var password = $(".password").val();
                    //console.log(username);
                    var $res = $(".longin_num");
                    $.post("login.php?action=login", {
                        username : username,
                        password :password
                    }, function(data){
                        console.log(data);
                        switch(data.type){
                            case 1:
                                $res.html("登陆成功");
                                window.location.href="admin.php"; 
                                break;
                            case 2:
                                var msg = "登陆失败,错误次数"+data.error;
                               $res.html(msg);
                                break;
                            case 0:
                                $res.html("等待30分钟");
                                break;    
                        }
                        console.log(data);
                    }, "json");
                    return false;

                    
                })

            })

        </script>
</body>
</html>
</body>
</html><?php }} ?>
