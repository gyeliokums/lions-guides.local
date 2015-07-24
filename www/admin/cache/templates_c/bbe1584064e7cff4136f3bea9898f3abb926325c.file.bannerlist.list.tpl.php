<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-17 08:01:08
         compiled from ".\templates\administrator\bannerlist.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189885595509135f362-61411202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe1584064e7cff4136f3bea9898f3abb926325c' => 
    array (
      0 => '.\\templates\\administrator\\bannerlist.list.tpl',
      1 => 1437112864,
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
  'nocache_hash' => '189885595509135f362-61411202',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559550919eefe8_55038220',
  'variables' => 
  array (
    'data' => 0,
    'htmlForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559550919eefe8_55038220')) {function content_559550919eefe8_55038220($_smarty_tpl) {?><!DOCTYPE html>
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
		<h2>Баннеры</h2>
	</header>

                </div>
                <div class="wrapper">
        
	<?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>


        
	<div class="panel-body">
		<h3 class="overdue">Срок действия просрочен</h3>
		<table class="table overdue">
			<thead>
			<tr>
				<td>Рекламодатель</td>
				<td>Альтернативный текст</td>
				<td>Дата окончания</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['bannerlist']['overdue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['company_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['alt_text'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['expiration_date'];?>
</td>
					<td><a href="?model=banner&amp;action=update&amp;id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
&amp;referrer=bannerlist">Изменить</a></td>
					<td><a href="?model=banner&amp;id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['parent_id'];?>
&amp;referrer=bannerlist&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			<?php } ?>
		</table>
		<hr />
		<h3 class="near-expiration">Срок действия будет просрочен в течении 10 дней</h3>
		<table class="table near-expiration">
			<thead>
			<tr>
				<td>Рекламодатель</td>
				<td>Альтернативный текст</td>
				<td>Дата окончания</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['bannerlist']['near_expiration']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['company_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['alt_text'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['expiration_date'];?>
</td>
					<td><a href="?model=banner&amp;action=update&amp;id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
&amp;referrer=bannerlist">Изменить</a></td>
					<td><a href="?model=banner&amp;id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['parent_id'];?>
&amp;referrer=bannerlist&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			<?php } ?>
		</table>
		<hr />
		<h3 class="long-expiration">Срок действия будет просрочен от 10 дней до 1 месяца</h3>
		<table class="table long-expiration">
			<thead>
			<tr>
				<td>Рекламодатель</td>
				<td>Альтернативный текст</td>
				<td>Дата окончания</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['bannerlist']['long_expiration']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['company_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['alt_text'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['banner']->value['expiration_date'];?>
</td>
					<td><a href="?model=banner&amp;action=update&amp;id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
&amp;referrer=bannerlist">Изменить</a></td>
					<td><a href="?model=banner&amp;id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['id'];?>
&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['banner']->value['parent_id'];?>
&amp;referrer=bannerlist&amp;action=remove&amp;submit=save|close">Удалить</a></td>
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
