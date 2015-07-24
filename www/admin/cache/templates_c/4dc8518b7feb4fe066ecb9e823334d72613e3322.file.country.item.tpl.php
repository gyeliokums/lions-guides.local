<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-17 07:51:50
         compiled from ".\templates\administrator\country.item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24008558b985e7c5642-80511688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dc8518b7feb4fe066ecb9e823334d72613e3322' => 
    array (
      0 => '.\\templates\\administrator\\country.item.tpl',
      1 => 1435669633,
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
  'nocache_hash' => '24008558b985e7c5642-80511688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558b985f10adc7_53866978',
  'variables' => 
  array (
    'data' => 0,
    'htmlForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558b985f10adc7_53866978')) {function content_558b985f10adc7_53866978($_smarty_tpl) {?><!DOCTYPE html>
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

	<link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.min.css" />

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
		<h2>Режим <?php if ($_smarty_tpl->tpl_vars['data']->value['common']['id']) {?>редактирования <?php } else { ?>добавления <?php }?>страны</h2>
	</header>

                </div>
                <div class="wrapper">
        
	<?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>


        
	<div class="panel-body">
		<form class="form-horizontal" role="form" action="?model=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['model'];?>
&amp;save&amp;action=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['action'];
if ($_smarty_tpl->tpl_vars['data']->value['common']['id']) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['id'];
}?>" method="post" enctype="multipart/form-data">
			<?php if ($_smarty_tpl->tpl_vars['data']->value['common']['action']=='add') {?>
			<input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['parent_id'];?>
" />
			<?php } else { ?>
			<input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['parent_id'];?>
" />
			<?php }?>
			<div class="form-group">
				<label for="inner_name" class="col-lg-2 col-sm-2 control-label">Внутреннее имя (URL)</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="inner_name" name="inner_name" placeholder="Внутреннее имя" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['inner_name'];?>
" required />
					<p class="help-block">Допускаются цифры, знаки "_"/"-" и буквы английского алфавита.</p>
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-lg-2 col-sm-2 control-label">Название страны</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="name" name="name" placeholder="Название страны" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['name'];?>
" required />
				</div>
			</div>
			<div class="form-group">
				<label for="position_in_list" class="col-lg-2 col-sm-2 control-label">Позиция в списке</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="position_in_list" name="position_in_list" placeholder="Позиция в списке" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['position_in_list'];?>
" required />
					<p class="help-block">Min (default): 0, Max: 999. Чем выше номер, тем выше озиция. Только цифры.</p>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['country']['data']['image']) {?>
			<div class="form-group">
				<label class="col-lg-2 col-sm-2 control-label">Изображение</label>
				<div class="col-lg-10">
					<ul class="my-image-gallery">
						<li>
							<a href="/uploads/images/stateunion/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['image'];?>
" target="_blank">
								<img src="/uploads/images/stateunion/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['data']->value['common']['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['image'];?>
" width="150" />
							</a>
							<label><input type="checkbox" name="removeImage" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['image'];?>
" class="delImg" /> Удалить</label>
						</li>
					</ul>
				</div>
			</div>
			<?php } else { ?>
			<div class="form-group">
				<label class="col-lg-2 col-sm-2 control-label">Загрузить изображение</label>
				<div class="col-lg-10">
					<input type="file" name="image[]" accept="images/*" class="btn-lg" />
				</div>
			</div>
			<?php }?>
			<div class="col-md-12">
				<div class="panel-group " id="accordion3">
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
									<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок страницы (title)" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['title'];?>
" />
								</div>
							</div>
							<div class="form-group">
								<label for="keywords" class="col-lg-2 col-sm-2 control-label">Ключевые слова (keywords)</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="keywords" name="keywords" placeholder="Ключевые слова (keywords)" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['keywords'];?>
" />
								</div>
							</div>
							<div class="form-group">
								<label for="meta_description" class="col-lg-2 col-sm-2 control-label">Описание страницы (meta description)</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Описание страницы (meta description)" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['meta_description'];?>
" />
								</div>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseLions">
									Достопримечательности
								</a>
							</h4>
						</div>
						<div id="collapseLions" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="form-group">
									<div class="col-lg-6 col-sm-2">Название</div><div class="col-lg-6">Ссылка (ЧПУ)</div>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<10) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<10; $_smarty_tpl->tpl_vars['i']->value++) {
?>
										<div class="col-lg-6 col-sm-2">
											<input class="form-control" type="text" name="lions[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][name]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['lions'][$_smarty_tpl->tpl_vars['i']->value]['name'];?>
" />
										</div>
										<div class="col-lg-6">
											<input class="form-control" type="text" name="lions[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][link]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['lions'][$_smarty_tpl->tpl_vars['i']->value]['link'];?>
" />
										</div>
									<?php }} ?>
								</div>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseGuides">
									Путеводители
								</a>
							</h4>
						</div>
						<div id="collapseGuides" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="form-group">
									<div class="col-lg-6 col-sm-2">Название</div><div class="col-lg-6">Ссылка (ЧПУ)</div>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<10) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<10; $_smarty_tpl->tpl_vars['i']->value++) {
?>
										<div class="col-lg-6 col-sm-2">
											<input class="form-control" type="text" name="guides[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][name]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['guides'][$_smarty_tpl->tpl_vars['i']->value]['name'];?>
" />
										</div>
										<div class="col-lg-6">
											<input class="form-control" type="text" name="guides[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][link]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['guides'][$_smarty_tpl->tpl_vars['i']->value]['link'];?>
" />
										</div>
									<?php }} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="description" class="col-lg-2 col-sm-2 control-label">Описание</label>
				<div class="col-lg-10">
					<textarea class="form-control " id="description" name="description" placeholder="Основной текст" rows="19"><?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['description'];?>
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
echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['parent_id'];
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

	<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap-fileupload.min.js"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['htmlForm']->value;?>

</body>
</html>
<?php }} ?>