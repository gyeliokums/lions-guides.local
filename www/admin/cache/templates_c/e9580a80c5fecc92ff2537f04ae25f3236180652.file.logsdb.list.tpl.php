<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-10 09:32:46
         compiled from ".\templates\administrator\logsdb.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32149559f7290b36e01-40771864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9580a80c5fecc92ff2537f04ae25f3236180652' => 
    array (
      0 => '.\\templates\\administrator\\logsdb.list.tpl',
      1 => 1436513554,
      2 => 'file',
    ),
    '1468ec7dfd14f4327a51e41b86270f3a19c9f200' => 
    array (
      0 => '.\\templates\\administrator\\layout.tpl',
      1 => 1435848364,
      2 => 'file',
    ),
    'c1d634ad5e09fbd9f094100b7abf484a3505e293' => 
    array (
      0 => '.\\templates\\default.tpl',
      1 => 1427966880,
      2 => 'file',
    ),
    '9dc91428ffc9fab895c383400e140a7a43c342a2' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1427966880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32149559f7290b36e01-40771864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559f7291ac9b70_71882121',
  'variables' => 
  array (
    'data' => 0,
    'htmlForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559f7291ac9b70_71882121')) {function content_559f7291ac9b70_71882121($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Путеводитель по странам</title>


	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style-responsive.css" rel="stylesheet" />
	<link href="js/jquery-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="js/html5shiv.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/respond.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<![endif]-->

</head>

<body class="sticky-header">

<section>

	<div class="left-side sticky-left-side">
		<div class="left-side-inner">
			<ul class="nav nav-pills nav-stacked custom-nav">
				<li><a href="?model=location"><span>State Unions</span></a></li>
				<li><a href="__sitemap.php"><span>Создать &quot;Карту сайта&quot;</span></a></li>
				<li><a href="?model=custodian"><span>Создать архивную копию</span></a></li>
				<li><a href="?model=logsdb">Просмотреть активность</a></li>
				<li><a href="?model=bannerlist">Баннеры</a></li>
			</ul>
		</div>
	</div>


        <div class="menu-right">
                <ul class="notification-menu">
                        <li>
                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <img src="./images/avatar.png" alt="" />
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['authorization']['full_name'];?>

                                        <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                        <li><a href="?logout"><i class="fa fa-sign-out"></i> Выйти</a></li>
                                </ul>
                        </li>

                </ul>
        </div>


        <div class="main-content" >
                <div class="page-heading">
        
	<header class="panel-heading">
		<h2>Логи</h2>
	</header>

                </div>
                <div class="wrapper">
        
	<?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>


        
	<div class="panel-body">
		<form class="form-horizontal" role="form" action="?controller=logsdb&amp;action=clear" method="post" enctype="multipart/form-data">
			<input type="submit" name="submit" value="Очистить" />
			<strong>&nbsp;&nbsp;&nbsp;Сохранить&nbsp;</strong>
			<select name="safe">
				<option value="10">10</option>
				<option value="100" selected>100</option>
				<option value="250">250</option>
				<option value="500">500</option>
				<option value="1000">1000</option>
			</select>
			<strong> записей</strong>
		</form>
			<table class="table">
			<thead>
			<tr>
				<td>Время</td>
				<td>Пользователь</td>
				<td>Действие</td>
			</tr>
			</thead>
			<?php  $_smarty_tpl->tpl_vars['logs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['logsdb']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logs']->key => $_smarty_tpl->tpl_vars['logs']->value) {
$_smarty_tpl->tpl_vars['logs']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['logs']->value['time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['logs']->value['user'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['logs']->value['action'];?>
</td>
				</tr>
			<?php } ?>
		</table>
	</div>

                </div>
        
	<footer class="sticky-footer">
		2014-2015 &copy; George A. Yeliokums
	</footer>

        </div>

</section>

	<?php echo '<script'; ?>
 src="js/jquery-1.11.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/ckeditor/ckeditor.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/main.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-ui-1.9.2.custom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/modernizr.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.nicescroll.js"><?php echo '</script'; ?>
>

	<!--gritter script-->
	<?php echo '<script'; ?>
 src="js/gritter/js/jquery.gritter.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/gritter/js/gritter-init.js" type="text/javascript"><?php echo '</script'; ?>
>

	<!--common scripts for all pages-->
	<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-multi-select/js/jquery.multi-select.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-multi-select/js/jquery.quicksearch.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/multi-select-init.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/tinymce/tinymce.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/tinymce/tinymce_init.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['htmlForm']->value;?>

</body>
</html>
<?php }} ?>
