<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 17:18:31
         compiled from ".\templates\administrator\souvenir.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8691552df7dced5ee7-08323483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e5386eccc26511d82dab994babaec9661edd65' => 
    array (
      0 => '.\\templates\\administrator\\souvenir.list.tpl',
      1 => 1431875407,
      2 => 'file',
    ),
    '1f61496931a6d9368e902eab6c7a20ba3144656f' => 
    array (
      0 => '.\\templates\\administrator\\layout.tpl',
      1 => 1431874916,
      2 => 'file',
    ),
    'f5afff6bfdda84a90b17cdcd1df84002d543297d' => 
    array (
      0 => '.\\templates\\default.tpl',
      1 => 1427966880,
      2 => 'file',
    ),
    '369d0baa37c0393a8dfa4e4323ac3240e5198ab5' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1427966880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8691552df7dced5ee7-08323483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552df7dd062b91_54719915',
  'variables' => 
  array (
    'data' => 0,
    'htmlForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552df7dd062b91_54719915')) {function content_552df7dd062b91_54719915($_smarty_tpl) {?><!DOCTYPE html>
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
		<h2>Статьи</h2>
	</header>
	<header class="panel-heading custom-tab ">
		<ul class="nav nav-tabs">
			<li><a href="?model=city&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Города</a></li>
			<li><a href="?model=article&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Статьи</a></li>
			<li><a href="?model=guide&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Путеводители</a></li>
			<li><a href="?model=kitchen&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Кухня</a></li>
			<li><a href="?model=news&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Новости</a></li>
			<li class="active"><a href="?model=souvenir&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Сувениры</a></li>
			<li><a href="?model=shopping&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Шоппинг</a></li>
			<li><a href="?model=banner&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Баннеры</a></li>
		</ul>
	</header>

                </div>
                <div class="wrapper">
        
	<?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>


        
	<div class="panel-body">
		<a href="?model=souvenir&amp;action=add&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Добавить статью</a>
		<table class="table">
			<thead>
			<tr>
				<td>URL</td>
				<td>Название статьи</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<tr>
				<td colspan="4"><a href="?model=country&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
&amp;back">&uArr; Вернуться к странам &uArr;</a></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['souvenir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['souvenir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['souvenir']->key => $_smarty_tpl->tpl_vars['souvenir']->value) {
$_smarty_tpl->tpl_vars['souvenir']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['souvenir']->value['inner_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['souvenir']->value['name'];?>
</td>
					<td><a href="?model=souvenir&amp;action=update&amp;id=<?php echo $_smarty_tpl->tpl_vars['souvenir']->value['id'];?>
">Изменить</a></td>
					<td><a href="?model=souvenir&amp;id=<?php echo $_smarty_tpl->tpl_vars['souvenir']->value['id'];?>
&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['souvenir']->value['parent_id'];?>
&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			<?php } ?>
		</table>
		<a href="?model=souvenir&amp;action=add&amp;parent_id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
">Добавить статью</a>
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
