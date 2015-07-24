<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5207558980c3a53902-53799715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd3385593b21812889cbc9aabcb9aa7794d9936b' => 
    array (
      0 => '.\\templates\\guest\\index.tpl',
      1 => 1436703438,
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
    'a7e8641a0510ada24e848f9d05bbc27d9b46a272' => 
    array (
      0 => '.\\templates\\guest\\blogs\\guides_short.tpl',
      1 => 1436538573,
      2 => 'file',
    ),
    '4f23c6eb42ae4c5b876e21e2d7bb5bed25b945a6' => 
    array (
      0 => '.\\templates\\guest\\blogs\\lions_long.tpl',
      1 => 1436538574,
      2 => 'file',
    ),
    '31e92962385d15112ba22fc4722cd6bf5a76dba6' => 
    array (
      0 => '.\\templates\\guest\\blogs\\banner_middle_long.tpl',
      1 => 1436703553,
      2 => 'file',
    ),
    '6c571d5bcc8e4e028619b1a2b99fa1e8b9869843' => 
    array (
      0 => '.\\templates\\guest\\blogs\\news_long.tpl',
      1 => 1436538575,
      2 => 'file',
    ),
    '5084b67bf9e955f4ae4a64523eebecfa1c7d06cc' => 
    array (
      0 => '.\\templates\\guest\\blogs\\articles_long.tpl',
      1 => 1436538568,
      2 => 'file',
    ),
    'dd0054447b6ba5367f1c6a43e606925b5b15b17e' => 
    array (
      0 => '.\\templates\\guest\\blogs\\countries_short.tpl',
      1 => 1436538572,
      2 => 'file',
    ),
    'ae6085c671c30164cce61e11e1b42bf77876b326' => 
    array (
      0 => '.\\templates\\guest\\blogs\\shopping_short.tpl',
      1 => 1436538576,
      2 => 'file',
    ),
    '2e5fb5e8a9216bf57a35ec922dc155ca7e0f376a' => 
    array (
      0 => '.\\templates\\guest\\blogs\\banner_bottom.tpl',
      1 => 1436703971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5207558980c3a53902-53799715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558980c4cb5324_06559907',
  'variables' => 
  array (
    '_page_title' => 0,
    '_page_keywords' => 0,
    '_page_description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558980c4cb5324_06559907')) {function content_558980c4cb5324_06559907($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_consts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 1);?>
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
					<h1><span class="slogan">информация&nbsp;для&nbsp;туристов</span></h1>
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
		
		
	 
	 
	
	
	<?php /*  Call merged included template "guest/blogs/guides_short.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/guides_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfc60dc77_54480138($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/guides_short.tpl" */?>
	
	<?php /*  Call merged included template "guest/blogs/lions_long.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/lions_long.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfc6f82b6_07366280($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/lions_long.tpl" */?>
	
	
	<?php /*  Call merged included template "guest/blogs/banner_middle_long.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/banner_middle_long.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfc7946d4_02422327($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/banner_middle_long.tpl" */?>
	
	<?php /*  Call merged included template "guest/blogs/news_long.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/news_long.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfc89e115_12230683($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/news_long.tpl" */?>
	
	<?php /*  Call merged included template "guest/blogs/articles_long.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/articles_long.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfc96d1c8_75135074($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/articles_long.tpl" */?>
	
	
	<?php /*  Call merged included template "guest/blogs/banner_middle_long.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/banner_middle_long.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfc7946d4_02422327($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/banner_middle_long.tpl" */?>
	
	<?php /*  Call merged included template "guest/blogs/countries_short.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/countries_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfca306f4_31233051($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/countries_short.tpl" */?>
	
	<?php /*  Call merged included template "guest/blogs/shopping_short.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/shopping_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfcb93ec7_75808757($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/shopping_short.tpl" */?>
	
	<?php /*  Call merged included template "guest/blogs/banner_bottom.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("guest/blogs/banner_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '5207558980c3a53902-53799715');
content_55a25cfcc302e2_66231190($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "guest/blogs/banner_bottom.tpl" */?>
 

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
	tjq(document).ready(function() {
		tjq('.revolution-slider').revolution({
			dottedOverlay:"none",
			delay:8000,
			startwidth:1170,
			startheight:646,
			onHoverStop:"on",
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"on",
			navigationType:"none",
			shadow:0,
			spinner:"spinner4",
			hideTimerBar:"on"
		});
	});
	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\blogs\guides_short.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cfc60dc77_54480138')) {function content_55a25cfc60dc77_54480138($_smarty_tpl) {?>		<div class="global-map-area section parallax" data-stellar-background-ratio="0.5" style="background-position: 50% 4.5px; padding-top: 50px; padding-bottom: 0px;">
			<div class="container">
			<h2 style="color: #fff;">Путеводители</h2>
				<div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
					<ul class="slides image-box hotel listing-style1">
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['guide_blog']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<li>
						<article class="box image-fixed">
							<figure><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="hover-effect yellow"><img class="img-responsive" height="160" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"></a></figure>
							<div class="details">
								<strong class="guides-title-box"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<small></small></strong>
								<p class="description"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p>
								<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" title="" class="button btn-small yellow float-bottom" style="width: 240px;">Читать</a>
							</div>
						</article>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\blogs\lions_long.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cfc6f82b6_07366280')) {function content_55a25cfc6f82b6_07366280($_smarty_tpl) {?>		<div class="section container">
			<h2>Достопримечательности</h2>
			<div class="row image-box style3">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['lion_blog']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<div class="col-sms-6 col-sm-6 col-md-3">
					<article class="box image-lion-fixed">
						<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
							<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" class="hover-effect"><img class="img-responsive index-lion-image" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" /></a>
						</figure>
						<div class="details text-center">
							<strong class="guides-title-box"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</strong>
							<p class="description offers-content"><?php echo $_smarty_tpl->tpl_vars['item']->value['country_name'];?>
</p>
							<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" class="button btn-small yellow" href="cruise-detailed.html" style="width: 240px;">Читать</a>
						</div>
						
					</article>
				</div>
				<?php } ?>
			</div>
		</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\blogs\banner_middle_long.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cfc7946d4_02422327')) {function content_55a25cfc7946d4_02422327($_smarty_tpl) {?>		<?php $_smarty_tpl->tpl_vars['banner'] = new Smarty_variable(array_shift($_smarty_tpl->tpl_vars['_banners']->value['middle']), null, 0);?>
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\blogs\news_long.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cfc89e115_12230683')) {function content_55a25cfc89e115_12230683($_smarty_tpl) {?>		<div class="container section">
			<h3 style="font-size: 1.6667em; line-height: 1.25em;">Новости туризма</h3>
			<div class="image-carousel style2" data-animation="slide" data-item-width="370" data-item-margin="30">
				<ul class="slides image-box style10">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['news_blog']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li class="box post">
						<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
							<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" class="hover-effect"><img class="img-responsive index-news-image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" /></a>
							<figcaption class="entry-date">
								<label class="date"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</label>
							</figcaption>
						</figure>
						<div class="details">
							<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" class="button btn-small yellow">Далее</a>
							<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
"><strong class="guides-title-box"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</strong></a>
							<div class="post-meta single-line-meta">
								<p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p>
								<span class="hidden updated"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</span>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\blogs\articles_long.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cfc96d1c8_75135074')) {function content_55a25cfc96d1c8_75135074($_smarty_tpl) {?>			<div class="container">
				<h3 style="font-size: 1.6667em; line-height: 1.25em;">Статьи о странах</h3>
				<div class="row image-box style2">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['article_blog']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<div class="col-sms-6 col-sm-6 col-md-6">
						<article class="articlies box">
							<figure class="animated fadeInLeft" data-animation-type="fadeInLeft" data-animation-duration="1" style="animation-duration: 5s; -webkit-animation-duration: 5s; visibility: visible;">
								<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" class="hover-effect" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><img class="index-articles-image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" /></a>
							</figure>
							<div class="details">
								<strong class="guides-title-box"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</strong>
								<p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p>
								<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="button btn-small yellow" style="width: 100%; margin-top: -8px;">Читать</a>
							</div>
						</article>
					</div>
					<?php } ?>
				</div>
			</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\blogs\countries_short.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cfca306f4_31233051')) {function content_55a25cfca306f4_31233051($_smarty_tpl) {?><div class="container section">
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#Russia">РОССИЯ</a></h4>
				</div>
				<ul class="check-square features">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['country_blog']['data'][0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#Europe">ЕВРОПА</a></h4>
				</div>
				<ul class="check-square features">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['country_blog']['data'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#Africa">АФРИКА</a></h4>
				</div>
				<ul class="check-square features">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['country_blog']['data'][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#Asia">АЗИЯ</a></h4>
				</div>
				<ul class="check-square features">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['country_blog']['data'][3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#America">АМЕРИКА</a></h4>
				</div>
				<ul class="check-square features">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['country_blog']['data'][4]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<a href="/countries/" class="uppercase full-width button btn-large yellow">Показать все страны</a>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\blogs\shopping_short.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cfcb93ec7_75808757')) {function content_55a25cfcb93ec7_75808757($_smarty_tpl) {?><div class="container">
	<div id="main" class="faqs">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h3 style="font-size: 1.6667em; line-height: 1.25em;">Путешественникам на заметку</h3>
				<div class="toggle-container question-list">
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['shopping_blog']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<div class="panel style1">
						<strong class="guides-title-box panel-title">
							<a data-toggle="collapse" href="#tgg<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="collapsed"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
						</strong>
						<div id="tgg<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
" class="panel-collapse collapse" style="padding: 0px 0px 25px 40px;">
							<div class="panel-content">
							
								<div><p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p></div>
								<div><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="button btn-small yellow">Читать</a></div>
							
							</div>
							
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 14:26:36
         compiled from ".\templates\guest\blogs\banner_bottom.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55a25cfcc302e2_66231190')) {function content_55a25cfcc302e2_66231190($_smarty_tpl) {?>			<div class="container">
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
