<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 17:19:30
         compiled from ".\templates\administrator\souvenir.item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23649552df7df866124-55258998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de3a07995104e85a7ea7cc6b4bf2fe7bba91ab96' => 
    array (
      0 => '.\\templates\\administrator\\souvenir.item.tpl',
      1 => 1429075474,
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
  'nocache_hash' => '23649552df7df866124-55258998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552df7df992de5_99249016',
  'variables' => 
  array (
    'data' => 0,
    'htmlForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552df7df992de5_99249016')) {function content_552df7df992de5_99249016($_smarty_tpl) {?><!DOCTYPE html>
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
		<h2>Режим <?php if ($_smarty_tpl->tpl_vars['data']->value['common']['id']) {?>редактирования <?php } else { ?>добавления <?php }?>статьи</h2>
	</header>

                </div>
                <div class="wrapper">
        
	<?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>


        
<div class="panel-body">
	<form id="completed-form" class="form-horizontal" role="form" action="?model=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['model'];?>
&amp;action=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['action'];
if ($_smarty_tpl->tpl_vars['data']->value['common']['id']) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['id'];
}?>" method="post" enctype="multipart/form-data">
		<?php if ($_smarty_tpl->tpl_vars['data']->value['common']['action']=='add') {?>
		<input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
" />
		<?php } else { ?>
		<input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['parent_id'];?>
" />
		<?php }?>
		<div class="form-group">
			<label for="inner_name" class="col-lg-2 col-sm-2 control-label">Внутреннее имя (URL)</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" id="inner_name" name="inner_name" placeholder="Внутреннее имя" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['inner_name'];?>
" required />
				<p class="help-block">Допускаются цифры, знаки "_"/"-" и буквы английского алфавита.</p>
			</div>
		</div>
		<div class="col-md-12">
			<div class="panel-group " id="accordion">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSEO">
								SEO
							</a>
						</h4>
					</div>
					<div id="collapseSEO" class="panel-collapse collapse">
						<div class="form-group">
							<label for="title" class="col-lg-2 col-sm-2 control-label">Заголовок страницы (title)</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок страницы (title)" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['title'];?>
" />
							</div>
						</div>
						<div class="form-group">
							<label for="keywords" class="col-lg-2 col-sm-2 control-label">Ключевые слова (keywords)</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="keywords" name="keywords" placeholder="Ключевые слова (keywords)" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['keywords'];?>
" />
							</div>
						</div>
						<div class="form-group">
							<label for="meta_description" class="col-lg-2 col-sm-2 control-label">Описание страницы (meta description)</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Описание страницы (meta description)" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['meta_description'];?>
" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="col-lg-2 col-sm-2 control-label">Название статьи</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" id="name" name="name" placeholder="Название статьи" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['name'];?>
" required />
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="col-lg-2 col-sm-2 control-label">Короткое описание</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" id="short_description" name="short_description" placeholder="Короткое описание" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['short_description'];?>
" maxlength="60" required />
				<p class="help-block">Требуется для вывода в списке</p>
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-lg-2 col-sm-2 control-label">Описание</label>
			<div class="col-lg-10">
				<textarea class="form-control" id="description" name="description" placeholder="Основной текст" rows="19"><?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['description'];?>
</textarea>
			</div>
		</div>
		<div class="col-lg-offset-2 col-lg-10">
			<button type="submit" class="btn btn-primary" name="submit" value="save">Сохранить</button>
			<button type="submit" class="btn btn-default" name="submit" value="save|close">Сохранить и закрыть</button>
			<button type="submit" class="btn btn-default" name="submit" form="blank-form" value="close">Закрыть</button>
		</div>
	</form>
	<form id="blank-form" class="form-horizontal" role="form" action="?model=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['model'];?>
&amp;parent_id=<?php if ($_smarty_tpl->tpl_vars['data']->value['common']['action']=='add') {
echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];
} else {
echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['parent_id'];
}?>" method="post" enctype="multipart/form-data"></form>
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
