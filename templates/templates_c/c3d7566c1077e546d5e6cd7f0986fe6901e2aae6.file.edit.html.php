<?php /* Smarty version Smarty-3.1.20, created on 2014-10-15 14:29:54
         compiled from "/Users/tc/www/login/templates/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1352308306543e030c0d82f3-40405866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3d7566c1077e546d5e6cd7f0986fe6901e2aae6' => 
    array (
      0 => '/Users/tc/www/login/templates/edit.html',
      1 => 1413354331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352308306543e030c0d82f3-40405866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_543e030c12d4b7_30978752',
  'variables' => 
  array (
    'recive' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543e030c12d4b7_30978752')) {function content_543e030c12d4b7_30978752($_smarty_tpl) {?><html>
<head>
	<meta charset="uft-8"> 
	<title>写私信</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div style="margin:20px auto;">
<form class="form-horizontal" role="form" action="" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">收件人</label>
    <div class="col-sm-10">
      <select class="form-control" name="re_id">
		  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recive']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
		  <?php } ?>
	</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">内容标题</label>
    <div class="col-sm-10">
     <input type="text"  name="title" class="form-control" placeholder="输入内容标题">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <textarea class="form-control" rows="3" name="content"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">发送</button>
    </div>
  </div>
</form>
</div>
</body>
</html><?php }} ?>
