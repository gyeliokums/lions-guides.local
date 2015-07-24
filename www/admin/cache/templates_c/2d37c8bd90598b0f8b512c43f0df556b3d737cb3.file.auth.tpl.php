<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 18:52:36
         compiled from "templates\auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10666551d73d47e1b08-48235312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d37c8bd90598b0f8b512c43f0df556b3d737cb3' => 
    array (
      0 => 'templates\\auth.tpl',
      1 => 1427966880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10666551d73d47e1b08-48235312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errMsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551d73d4810918_85452911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d73d4810918_85452911')) {function content_551d73d4810918_85452911($_smarty_tpl) {?><!doctype html>
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
