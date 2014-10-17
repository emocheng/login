<?php /* Smarty version Smarty-3.1.20, created on 2014-10-16 17:20:07
         compiled from "/Users/tc/www/login/templates/admin.html" */ ?>
<?php /*%%SmartyHeaderCode:190240182543cd73fc482a1-88247606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '463ffe925bfd29c738043b7e9ada5e4a0dd2a6af' => 
    array (
      0 => '/Users/tc/www/login/templates/admin.html',
      1 => 1413358836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190240182543cd73fc482a1-88247606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_543cd73fc9ae46_72011495',
  'variables' => 
  array (
    'info' => 0,
    'mail_info' => 0,
    'v' => 0,
    're_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd73fc9ae46_72011495')) {function content_543cd73fc9ae46_72011495($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/tc/www/login/include/smarty/plugins/modifier.date_format.php';
?><html>
<head>
	<meta charset="utf-8">
	<title>用户界面</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<style type="text/css">
	.a{
		text-align: center;
	}
</style>
<body>
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<p><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</p>

<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>发件人</th>
          <th>标题</th>
          <th>时间</th>
        </tr>
      </thead>
      <tbody>
      	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mail_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="a">
		<a href="edit.php"><span class="glyphicon glyphicon-pencil"></span></a>
	</div>
	<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>收件人</th>
          <th>标题</th>
          <th>时间</th>
        </tr>
      </thead>
      <tbody>
      	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['re_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['re_name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
          <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

</body>
</html><?php }} ?>
