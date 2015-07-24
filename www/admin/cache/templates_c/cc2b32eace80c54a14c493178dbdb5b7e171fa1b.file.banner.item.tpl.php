<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-09 13:23:28
         compiled from ".\templates\administrator\banner.item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239285558b1e7233500-29847667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc2b32eace80c54a14c493178dbdb5b7e171fa1b' => 
    array (
      0 => '.\\templates\\administrator\\banner.item.tpl',
      1 => 1432472179,
      2 => 'file',
    ),
    '1f61496931a6d9368e902eab6c7a20ba3144656f' => 
    array (
      0 => '.\\templates\\administrator\\layout.tpl',
      1 => 1432478579,
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
  'nocache_hash' => '239285558b1e7233500-29847667',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5558b1e73025b6_25571458',
  'variables' => 
  array (
    'data' => 0,
    'htmlForm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5558b1e73025b6_25571458')) {function content_5558b1e73025b6_25571458($_smarty_tpl) {?><!DOCTYPE html>
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
		<h2>Режим <?php if ($_smarty_tpl->tpl_vars['data']->value['common']['id']) {?>редактирования <?php } else { ?>добавления <?php }?>города</h2>
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
				<input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['parent_id'];?>
" />
			<?php }?>
			<div class="form-group">
				<label for="company_name" class="col-lg-2 col-sm-2 control-label">Рекламодатель</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="company_name" name="company_name" placeholder="Рекламодатель" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['company_name'];?>
" required />
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel-group " id="accordion">
					<div class="panel">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#contacts">
									Контакты
								</a>
							</h4>
						</div>
						<div id="contacts" class="panel-collapse collapse">
							<div class="form-group">
								<label for="title" class="col-lg-2 col-sm-2 control-label">ФИО отвественного лица</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="title" name="contact_fio" placeholder="ФИО отвественного лица" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['contact_fio'];?>
" />
								</div>
							</div>
							<div class="form-group">
								<label for="contact_phone" class="col-lg-2 col-sm-2 control-label">Телефон</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Контактный телефон" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['contact_phone'];?>
" />
								</div>
							</div>
							<div class="form-group">
								<label for="contact_email" class="col-lg-2 col-sm-2 control-label">Почта</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Почта" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['contact_email'];?>
" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="expiration_date" class="col-lg-2 col-sm-2 control-label">Срок годности</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="expiration_date" name="expiration_date" placeholder="Срок давности" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['expiration_date'];?>
" required />
				</div>
			</div>
			<div class="form-group">
				<label for="alt_text" class="col-lg-2 col-sm-2 control-label">Альтернативный текст</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="alt_text" name="alt_text" placeholder="Альтернативный текст" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['alt_text'];?>
" required />
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['banner']['data']['image']) {?>
			<div class="form-group">
				<label class="col-lg-2 col-sm-2 control-label">Изображение</label>
				<div class="col-lg-10">
					<ul class="my-image-gallery">
						<li>
							<a href="/uploads/images/stateunion/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['city'];?>
/banners/<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['image'];?>
" target="_blank">
								<img src="/uploads/images/stateunion/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['city'];?>
/banners/<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['image'];?>
" width="150" />
							</a>
							<label><input type="checkbox" name="removeImage" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['image'];?>
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
			<div class="form-group">
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
echo $_smarty_tpl->tpl_vars['data']->value['banner']['data']['parent_id'];
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
