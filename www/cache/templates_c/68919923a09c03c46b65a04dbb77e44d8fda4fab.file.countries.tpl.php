<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:22
         compiled from ".\templates\guest\countries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2911755939aa7cf0984-14564927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68919923a09c03c46b65a04dbb77e44d8fda4fab' => 
    array (
      0 => '.\\templates\\guest\\countries.tpl',
      1 => 1436703857,
      2 => 'file',
    ),
    'ec8a347a1c7e9af5cff4e78e6fcd26449f308c5f' => 
    array (
      0 => '.\\templates\\guest\\listlayout.tpl',
      1 => 1436538582,
      2 => 'file',
    ),
    'cb8bc042bbb4d4d1e251a278fbc661e23f74ed7e' => 
    array (
      0 => '.\\templates\\guest\\layout.tpl',
      1 => 1436538581,
      2 => 'file',
    ),
    '0cbccaeaaf59f9ad358345738aaaec9c84f6da8e' => 
    array (
      0 => '.\\templates\\default.tpl',
      1 => 1436703112,
      2 => 'file',
    ),
    '4ded93a1a904c01d9cb90daff7f01462dcc8dd36' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1436538585,
      2 => 'file',
    ),
    '31e92962385d15112ba22fc4722cd6bf5a76dba6' => 
    array (
      0 => '.\\templates\\guest\\blogs\\banner_middle_long.tpl',
      1 => 1436703553,
      2 => 'file',
    ),
    '2e5fb5e8a9216bf57a35ec922dc155ca7e0f376a' => 
    array (
      0 => '.\\templates\\guest\\blogs\\banner_bottom.tpl',
      1 => 1436703971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2911755939aa7cf0984-14564927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55939aa8497fa4_58509101',
  'variables' => 
  array (
    '_page_title' => 0,
    '_page_keywords' => 0,
    '_page_description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55939aa8497fa4_58509101')) {function content_55939aa8497fa4_58509101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_consts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 1);?>
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
	<link rel="shortcut icon" href="/images/favicon.png" />
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
				
				<?php if ($_smarty_tpl->tpl_vars['_banners']->value['top']['href']) {?>
				<div class="hidden-mobile top-banner pull-right">
					<a href="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['href'];?>
" target="_blank" rel="nofollow">
						<img src="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['alt'];?>
"<?php if ($_smarty_tpl->tpl_vars['_banners']->value['top']['width']!=0) {?> width="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['width'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['_banners']->value['top']['height']!=0) {?> height="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['height'];?>
"<?php }?> />
					</a>
				</div>
				<?php }?>
				
			</div>
			
		</header>
		
		
		<?php if ($_smarty_tpl->tpl_vars['_banners']->value['top']['href']) {?>
		<div id="mobile-banner" class="visible-mobile">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['href'];?>
" target="_blank" rel="nofollow">
				<img src="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['alt'];?>
" width="100%" <?php if ($_smarty_tpl->tpl_vars['_banners']->value['top']['height']!=0) {?> height="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['top']['height'];?>
"<?php }?> />
			</a>
		</div>
		<?php }?>
		
		
	 
		<div class="page-title-container">
		<div class="container">
			<div class="page-title pull-left">
				<h1 class="entry-title">Где провести отпуск</h1>
			</div>
			<ul class="breadcrumbs pull-right">
				<li><a href="/">Home</a></li>
			</ul>
		</div>
	</div> 
	<section id="content">
		<div class="container">
			
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
			<div id="main" class="md-section">
				<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['stateunions']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
				<h2 id="<?php echo $_smarty_tpl->tpl_vars['state']->value['inner_name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['state']->value['inner_name'];?>
" class="no-margin"><?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>
</h2>
				<div class="small-box"></div>
				<div class="row image-box style1 add-clearfix">
					<?php if ($_smarty_tpl->tpl_vars['state']->value['children']) {?>
						<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['state']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
					<div class="col-sm-6 col-md-3">
						<article class="box country">
							<div class="details">
								<a  title="<?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
" href="/<?php echo $_smarty_tpl->tpl_vars['country']->value['inner_name'];?>
">
									<h4 class="box-title"><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</h4>
								</a>
							</div>
						</article>
					</div>
						<?php } ?>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['i']->value%2==0) {?>
					<?php /*  Call merged included template "guest/blogs/banner_middle_long.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/banner_middle_long.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2911755939aa7cf0984-14564927');
content_55a25cef01f2a1_15237064($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/banner_middle_long.tpl" */?>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
				<?php } ?>
			</div> 
		</div>
			
			<?php /*  Call merged included template "guest/blogs/banner_bottom.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/banner_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2911755939aa7cf0984-14564927');
content_55a25cef11d158_17832751($_smarty_tpl);
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
	<!-- Yandex.Metrika informer -->
	<a href="https://metrika.yandex.ru/stat/?id=29652860&amp;from=informer" style="position:absolute; left:-9999px;" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/29652860/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:29652860,lang:'ru'});return false}catch(e){}"/></a>
    <!-- /Yandex.Metrika informer -->
	<!-- Yandex.Metrika counter -->
	<?php echo '<script'; ?>
 type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter29652860 = new Ya.Metrika({id:29652860,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true});
				} catch(e) { }
			});
			var n = d.getElementsByTagName("script")[0],
					s = d.createElement("script"),
					f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
    <?php echo '</script'; ?>
>
	<noscript><div><img src="//mc.yandex.ru/watch/29652860" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<?php echo '<script'; ?>
 type="text/javascript">
		tjq(document).ready(
			function () {
				window.location.hash = window.location.hash;
			}
		);
	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:23
         compiled from ".\templates\guest\blogs\banner_middle_long.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cef01f2a1_15237064')) {function content_55a25cef01f2a1_15237064($_smarty_tpl) {?>		<?php $_smarty_tpl->tpl_vars['banner'] = new Smarty_variable(array_shift($_smarty_tpl->tpl_vars['_banners']->value['middle']), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['banner']->value['href']) {?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 animated" data-animation-type="fadeInDown" data-animation-delay="0">
					<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['href'];?>
" target="_blank" rel="nofollow">
						<img class="img-responsive random-index-banner-1170x160" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['alt'];?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['width']!=0) {?> width="<?php echo $_smarty_tpl->tpl_vars['banner']->value['width'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['benner']->value['height']!=0) {?> height="<?php echo $_smarty_tpl->tpl_vars['banner']->value['height'];?>
"<?php }?> />
					</a>
				</div>
			</div>
		</div>
		<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:23
         compiled from ".\templates\guest\blogs\banner_bottom.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cef11d158_17832751')) {function content_55a25cef11d158_17832751($_smarty_tpl) {?>			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 animated" style="padding-bottom: 20px" data-animation-type="fadeInDown" data-animation-delay="0">
						<?php if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['href']) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['href'];?>
" target="_blank" rel="nofollow">
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['alt'];?>
"<?php if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['width']!=0) {?> width="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['width'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['height']!=0) {?> height="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][0]['height'];?>
"<?php }?> />
						</a>
						<?php }?>
					</div>
					<div class="col-sm-6 col-md-6 animated" data-animation-type="fadeInDown" data-animation-delay="0">
						<?php if ($_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['href']) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['href'];?>
" target="_blank" rel="nofollow">
							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['_banners']->value['bottom'][1]['src'];?>
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
