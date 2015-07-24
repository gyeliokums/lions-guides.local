<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-25 07:57:26
         compiled from "templates\auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24621558b9846913e49-83599232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '581d525a706cfd4000381cad84ab949d695ec830' => 
    array (
      0 => 'templates\\auth.tpl',
      1 => 1427966880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24621558b9846913e49-83599232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errMsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558b9846dcee52_78435671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558b9846dcee52_78435671')) {function content_558b9846dcee52_78435671($_smarty_tpl) {?><!doctype html>
<html lang="ru-ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title>Тест</title>
	<!--<link rel="stylesheet" type="text/css" href="styles/main.css" />-->
	<?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="scripts/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="scripts/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>

<body class="login-body">
<div class="container`">

	<form action="index.php" method="post" class="form-signin">
		<div class="form-signin-heading text-center">
			<h1 class="sign-title">Вход</h1>
			<img src="images/login-logo.png" alt=""/>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['errMsg']->value) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</div><?php }?>
		<div class="login-wrap">
			<input type="text" class="form-control" placeholder="Логин" autofocus name="login" />
			<input type="password" class="form-control" placeholder="Пароль" name="password" />
			<button class="btn btn-lg btn-login btn-block" type="submit" name="sent" value="">
				<i class="fa fa-check"></i>
			</button>
		</div>
	</form>
</div>
</body>
</html><?php }} ?>
