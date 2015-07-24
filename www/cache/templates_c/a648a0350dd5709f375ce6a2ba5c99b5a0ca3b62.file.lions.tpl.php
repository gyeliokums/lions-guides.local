<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 11:15:32
         compiled from ".\templates\guest\lions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16156559a4734580f80-75510633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a648a0350dd5709f375ce6a2ba5c99b5a0ca3b62' => 
    array (
      0 => '.\\templates\\guest\\lions.tpl',
      1 => 1436174118,
      2 => 'file',
    ),
    'cb8bc042bbb4d4d1e251a278fbc661e23f74ed7e' => 
    array (
      0 => '.\\templates\\guest\\layout.tpl',
      1 => 1436105919,
      2 => 'file',
    ),
    '0cbccaeaaf59f9ad358345738aaaec9c84f6da8e' => 
    array (
      0 => '.\\templates\\default.tpl',
      1 => 1436105907,
      2 => 'file',
    ),
    '4ded93a1a904c01d9cb90daff7f01462dcc8dd36' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1436105922,
      2 => 'file',
    ),
    'd571f808fefd5e080997bf99f0b40c6a83348e08' => 
    array (
      0 => '.\\templates\\guest\\blogs\\breadcrumbs.tpl',
      1 => 1436170686,
      2 => 'file',
    ),
    '8df2edd9e2dadcc5b1f7b4c1dd8c620ccaea3bbb' => 
    array (
      0 => '.\\templates\\guest\\blogs\\country_menu.tpl',
      1 => 1436167953,
      2 => 'file',
    ),
    '16ed05f393fa54d9510edb305c8543c4e831a092' => 
    array (
      0 => '.\\templates\\guest\\blogs\\news_short.tpl',
      1 => 1436105915,
      2 => 'file',
    ),
    'f8bb49bf00b7b73fd5ac374922dfa65ef163c59f' => 
    array (
      0 => '.\\templates\\guest\\blogs\\articles_short.tpl',
      1 => 1436105909,
      2 => 'file',
    ),
    '2e5fb5e8a9216bf57a35ec922dc155ca7e0f376a' => 
    array (
      0 => '.\\templates\\guest\\blogs\\banner_bottom.tpl',
      1 => 1436105909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16156559a4734580f80-75510633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_page_title' => 0,
    '_page_keywords' => 0,
    '_page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559a47352411d9_02051829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559a47352411d9_02051829')) {function content_559a47352411d9_02051829($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_consts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 1);?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['_page_title']->value;?>
</title>
	<meta charset="utf-8">
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['_page_keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['_page_description']->value;?>
" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Theme Styles -->
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/css/font-awesome.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/css/animate.min.css">
	<!-- Current Page Styles -->
	<link rel="stylesheet" type="text/css" href="/components/revolution_slider/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/components/revolution_slider/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/components/revolution_slider/css/style-sea-blue" media="screen" />
	<link rel="stylesheet" type="text/css" href="/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/components/flexslider/flexslider.css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Main Style -->
	<link rel="stylesheet" type="text/css" href="/css/style-sea-blue.css" />
	<!-- Custom Styles -->
	<link rel="stylesheet" href="/css/custom.css" />
	<!-- Updated Styles -->
	<link rel="stylesheet" href="/css/updates.css" />
	<!-- Responsive Styles -->
	<link rel="stylesheet" href="/css/responsive.css" />
	<!-- CSS for IE -->
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="/css/ie.css" />
	<![endif]-->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>
<body>
	<div id="page-wrapper">
	
	
		<header id="header" class="navbar-static-top style7">
			<div class="container">
				<div class="pull-right hidden-mobile">
					<address class="contact-details">
						<span class="contact-phone"><i class="soap-icon-phone"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_contact_phone']->value;?>
</span>
						<a class="contact-email" href="mailto:<?php echo $_smarty_tpl->tpl_vars['_contact_email']->value;?>
"><i class="soap-icon-letter-1"></i> <?php echo $_smarty_tpl->tpl_vars['_contact_email']->value;?>
</a>
					</address>
				</div>
			</div>
		</header>
		<header id="header" class="navbar-static-top style1">
			<div class="container">
				<a href="/" class="logo">
					<span class="name">LIONS&nbsp;&amp;&nbsp;GUIDES</span>
					<strong><span class="slogan">информация&nbsp;для&nbsp;туристов</span></strong>
				</a>
				<div class="hidden-mobile top-banner pull-right">
					
						<?php if ($_smarty_tpl->tpl_vars['_banners']->value['top']) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['href'];?>
" target="_blank" rel="nofollow">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['alt'];?>
"<?php if ($_smarty_tpl->tpl_vars['_banners']->value['top']['width']!=0) {?> width="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['width'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['_banners']->value['top']['height']!=0) {?> height="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['height'];?>
"<?php }?> />
						</a>
						<?php }?>
					
				</div>
			</div>
			
		</header>
	 
		<div class="page-title-container">
		<div class="container">
			<div class="page-title pull-left">
				<h2 class="entry-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country']['name'];?>
 - Достопримечательности</h2>
			</div>
		</div>
		<?php /*  Call merged included template "guest/blogs/breadcrumbs.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16156559a4734580f80-75510633');
content_559a4734a824b1_08317382($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/breadcrumbs.tpl" */?>
	</div> 
	<section id="content">
		<div class="container">
			<div class="row">
				<div id="main" class="col-md-9" style="margin-top: 30px;"><?php /*  Call merged included template "guest/blogs/country_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/country_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16156559a4734580f80-75510633');
content_559a4734bda100_15794098($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/country_menu.tpl" */?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['entity']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
 alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 style="float: left; margin-right: 15px;" /><?php }?>
		<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</strong>&nbsp;-&nbsp;<em><?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>
</em></a><br />
		<p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p>
		<hr />
	<?php } ?>
</div>
				<div class="col-md-3" style="margin-top: 30px;">	<figure>
		<img width="270" height="208" src="http://placehold.it/270x208" alt="">
	</figure>
	<?php if (is_array($_smarty_tpl->tpl_vars['data']->value['news_blog']['data'])&&!empty($_smarty_tpl->tpl_vars['data']->value['news_blog']['data'])) {
/*  Call merged included template "guest/blogs/news_short.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/news_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16156559a4734580f80-75510633');
content_559a4734d261d4_36455129($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/news_short.tpl" */
}?>
	<figure>
		<img width="270" height="208" src="http://placehold.it/270x208" alt="">
	</figure>
	<?php if (is_array($_smarty_tpl->tpl_vars['data']->value['article_blog']['data'])&&!empty($_smarty_tpl->tpl_vars['data']->value['atricle_blog']['data'])) {
/*  Call merged included template "guest/blogs/articles_short.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/articles_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16156559a4734580f80-75510633');
content_559a4734dd5e73_49820258($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/articles_short.tpl" */
}?></div>
			</div> 
		</div>
			
			<?php /*  Call merged included template "guest/blogs/banner_bottom.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/banner_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '16156559a4734580f80-75510633');
content_559a4734e7de21_62353358($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/banner_bottom.tpl" */?>
		 
	</section> 

	<footer id="footer">
		<div class="bottom gray-area">
			<div class="container">
				<div class="pull-left copyright">
					<ul class="hidden-mobile social-icons clearfix">
						<li class="vk"><a target="_blank" href="http://vk.com/share.php?url=http://lions-guides.ru/<?php echo $_smarty_tpl->tpl_vars['_inner_name']->value;?>
" title="Поделиться в ВКонтакте" data-toggle="tooltip" data-original-title="vk.com"><i class="fa fa-vk"></i></a></li>
						<li class="googleplus"><a title="Поделиться в Google+" href="https://plus.google.com/share?url=http://lions-guides.ru/<?php echo $_smarty_tpl->tpl_vars['_inner_name']->value;?>
" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="googleplus"><i class="fa fa-google-plus"></i></a></li>
						<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=http://lions-guides.ru/<?php echo $_smarty_tpl->tpl_vars['_inner_name']->value;?>
&t=<?php if ($_smarty_tpl->tpl_vars['_page_title']->value) {
echo $_smarty_tpl->tpl_vars['_page_title']->value;
} else {
}?>" title="Поделиться в Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="facebook"><i class="fa fa-facebook"></i></a></li>
						<li class="twitter"><a href="http://www.twitter.com/share?url=http://lions-guides.ru/<?php echo $_smarty_tpl->tpl_vars['_inner_name']->value;?>
&amp;text=<?php if ($_smarty_tpl->tpl_vars['_page_title']->value) {
echo $_smarty_tpl->tpl_vars['_page_title']->value;
} else {
}?>" title="Поделиться в Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="twitter"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
				<div class="pull-right">
					<a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
				</div>
				<div class="copyright pull-right">
					<p>&copy; 2015 Путеводители и достопримечательности. Все работы защищены законом об авторском праве.</p>
				</div>
			</div>
		</div>
	</footer> 

	</div>
	<!-- Javascript -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.noconflict.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/modernizr.2.7.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.placeholder.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-ui.1.10.4.min.js"><?php echo '</script'; ?>
>
	<!-- Twitter Bootstrap -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!-- load revolution slider scripts -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/components/revolution_slider/js/jquery.themepunch.plugins.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/components/revolution_slider/js/jquery.themepunch.revolution.min.js"><?php echo '</script'; ?>
>
	<!-- load BXSlider scripts -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/components/jquery.bxslider/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
	<!-- Flex Slider -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/components/flexslider/jquery.flexslider.js"><?php echo '</script'; ?>
>
	<!-- parallax -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
	<!-- waypoint -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/waypoints.min.js"><?php echo '</script'; ?>
>
	<!-- load page Javascript -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/theme-scripts.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/scripts.js"><?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 11:15:32
         compiled from ".\templates\guest\blogs\breadcrumbs.tpl" */ ?>
<?php if ($_valid && !is_callable('content_559a4734a824b1_08317382')) {function content_559a4734a824b1_08317382($_smarty_tpl) {?>	<div class="page-title pull-left">
		<ul class="breadcrumbs pull-right">
			<?php if ($_smarty_tpl->tpl_vars['data']->value['common']['data']['model']!='index') {?><li><a href="/">Home</a>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['state_inner_name']) {?>
			<li><a href="/countries">Где провести отпуск</a> - <a href="/countries#<?php echo $_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['state_inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['state_name'];?>
</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['country_inner_name']) {?>
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['country_inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['country_name'];?>
</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['entity_inner_name']) {?>
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['entity_inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['breadcrumbs']['data']['entity_name'];?>
</a></li>
			<?php }?>
			<?php }?>
		</ul>
	</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 11:15:32
         compiled from ".\templates\guest\blogs\country_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_559a4734bda100_15794098')) {function content_559a4734bda100_15794098($_smarty_tpl) {?>	<div class="tab-container">
		<ul class="tabs">
			<li class=""><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country']['inner_name'];?>
/guides/">Путеводители</a></li>
			<li class=""><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country']['inner_name'];?>
/cooking/">Кухня</a></li>
			<li class=""><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country']['inner_name'];?>
/souvenirs/">Сувениры</a></li>
			<li class=""><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['country']['inner_name'];?>
/shopping/">Шоппинг</a></li>
		</ul>
	</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 11:15:32
         compiled from ".\templates\guest\blogs\news_short.tpl" */ ?>
<?php if ($_valid && !is_callable('content_559a4734d261d4_36455129')) {function content_559a4734d261d4_36455129($_smarty_tpl) {?><div class="travelo-box contact-box">
	<a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['current']['country_inner_name'];?>
/news/"><h3>Новости</h3></a>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['news_blog']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<div class="details">
		<h4 class="box-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<small><?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>
</small></h4>
		<p class="description"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p>
		<span class="clearfix"> <a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" class="button yellow full-width uppercase btn-small">Читать</a>
	</div>
	<?php } ?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 11:15:32
         compiled from ".\templates\guest\blogs\articles_short.tpl" */ ?>
<?php if ($_valid && !is_callable('content_559a4734dd5e73_49820258')) {function content_559a4734dd5e73_49820258($_smarty_tpl) {?><div class="travelo-box contact-box">
	<a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['position']['current']['country_inner_name'];?>
"><h3>Статьи</h3></a>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['article_blog']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<div class="details">
		<h2 class="box-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h2>
		<p class="description"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p>
		<span class="clearfix"> <a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
/" class="button green full-width uppercase btn-small">Читать</a>
	</div>
	<?php } ?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 11:15:32
         compiled from ".\templates\guest\blogs\banner_bottom.tpl" */ ?>
<?php if ($_valid && !is_callable('content_559a4734e7de21_62353358')) {function content_559a4734e7de21_62353358($_smarty_tpl) {?>			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 animated" style="padding-bottom: 20px"data-animation-type="fadeInDown" data-animation-delay="0">
						<?php if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['href'];?>
" target="_blank" rel="nofollow">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['alt'];?>
"<?php if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['width']!=0) {?> width="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['width'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['height']!=0) {?> height="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['height'];?>
"<?php }?> />
						</a>
						<?php }?>
					</div>
					<div class="col-sm-6 col-md-6 animated" data-animation-type="fadeInDown" data-animation-delay="0">
						<?php if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['href'];?>
" target="_blank" rel="nofollow">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['alt'];?>
"<?php if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['width']!=0) {?> width="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['width'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['height']!=0) {?> height="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['height'];?>
"<?php }?> />
						</a>
						<?php }?>
					</div>
				</div>
			</div><?php }} ?>
