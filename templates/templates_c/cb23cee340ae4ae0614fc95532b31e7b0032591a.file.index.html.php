<?php /* Smarty version Smarty-3.1.20, created on 2014-10-17 15:12:34
         compiled from "/Users/tc/www/login/templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1544733545543cd5b5442f39-02746179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb23cee340ae4ae0614fc95532b31e7b0032591a' => 
    array (
      0 => '/Users/tc/www/login/templates/index.html',
      1 => 1413529933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1544733545543cd5b5442f39-02746179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_543cd5b5491188_99413612',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd5b5491188_99413612')) {function content_543cd5b5491188_99413612($_smarty_tpl) {?><html>
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
    <div class="longin_num hide">您已经登陆失败<span>2</span>次</div>
        <script type="text/javascript">
            $(function(){
                $(".btn").click(function(){
                    //$(".longin_num").removeClass("hide");
                    var username = $(".username").val();
                    var password = $(".password").val();
                    console.log(username);
                    return false;

                    
                })

            })

        </script>
</body>
</html>
</body>
</html><?php }} ?>
