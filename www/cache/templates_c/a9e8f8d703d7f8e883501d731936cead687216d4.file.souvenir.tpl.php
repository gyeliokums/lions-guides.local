<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-30 20:53:03
         compiled from ".\templates\guest\souvenir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2705455427a0f5ece31-69285522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9e8f8d703d7f8e883501d731936cead687216d4' => 
    array (
      0 => '.\\templates\\guest\\souvenir.tpl',
      1 => 1429105170,
      2 => 'file',
    ),
    'fbf0fd8bed3d1292954879f1606a0a1d7e20cd3f' => 
    array (
      0 => '.\\templates\\guest\\layout.tpl',
      1 => 1430419428,
      2 => 'file',
    ),
    'ceababc786c4e6e4576bda1df2224e1505f0d0cd' => 
    array (
      0 => '.\\templates\\_consts.tpl',
      1 => 1427968320,
      2 => 'file',
    ),
    'baebdf59e6b51489abe87a15d6adf5ff713d155f' => 
    array (
      0 => '.\\templates\\default.tpl',
      1 => 1428688555,
      2 => 'file',
    ),
    '67312b7474fea577331688c6abb5fd3e5e621a11' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1427968320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2705455427a0f5ece31-69285522',
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
  'unifunc' => 'content_55427a0f70a0f8_95161047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55427a0f70a0f8_95161047')) {function content_55427a0f70a0f8_95161047($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<title><?php if ($_smarty_tpl->tpl_vars['_page_title']->value) {
echo $_smarty_tpl->tpl_vars['_page_title']->value;
} else { ?>Путеводители по городам и странам. Описание достопримечательностей.<?php }?></title>
		<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['_page_keywords']->value) {
echo $_smarty_tpl->tpl_vars['_page_keywords']->value;
} else { ?>путеводители, достопримечательности,туризм, кухня, шоппинг<?php }?>" />
		<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['_page_description']->value) {
echo $_smarty_tpl->tpl_vars['_page_description']->value;
} else { ?>Путеводители по городам и странам мира. Подробное описание достопримечательностей. Статьи о кухне, шоппинге и сувенирах. Полезная информация для туристов.<?php }?>" />
		<link rel="shortcut icon" href="/images/favicon.png" />
		
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<link href="/css/modal.css" rel="stylesheet" type="text/css" />
<link href="/css/jquery.bxslider.css" rel="stylesheet" type="text/css" />

	</head>
	<body>
	
	<header>
		<div class="top">
			<div class="center">
				<ul>
					
					<li><img src="/images/phone.png" alt="">+7 966 177 70 15</li>
					<li><img src="/images/mail.png" alt=""><a href="mailto:info@lions-guides.ru">info@lions-guides.ru</a></li>
				</ul>
				<div id="overlay"></div><!-- Подложка -->
			</div>
		</div>
		<div class="bottom">
			<div class="center">
				<a href="/" class="logo">
					<span class="name">LIONS & GUIDES</span>
					<h1><span class="slogan">информация для туристов</span></h1>
				</a>
				<a href="javascript:void(0);" rel="nofollow" class="baner" style="cursor: default;"><img src="/images/728-90-1.bmp" alt="" /></a>
			</div>
		</div>
	</header> 
	
	<div class="content">
		 
		<div class="wrapper">
		 
		</div>
	</div>
	 
	<div class="content">
		<div class="sl">
			<div id="img1" class="bg"></div>
			<div class="bt"></div>
			<div class="bot"></div>
		</div> <!-- test -->
		<div class="wrapper">
			<div class="line1">
				<div class="line2">&nbsp;</div>
			</div>
		<div class="line3">
	
	<div class="page">
		<h1><?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['name'];?>
</h1>
		<?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']['description'];?>

	</div>

	<div class="sidebar">
		<div class="help">
			<strong>подробно о стране</strong>
			<ul>
				<li><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['inner_name'];?>
/guides/">Путеводители</a></li>
				<li><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['inner_name'];?>
/cooking/">Кухня</a></li>
				<li><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['inner_name'];?>
/souvenirs/">Сувениры</a></li>
				<li><a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['inner_name'];?>
/shopping/">Шоппинг</a></li>
				
			</ul>
		</div>
		<a href="javascript:void(0);" rel="nofollow" class="baner" style="cursor: default;"><img src="/images/207-207-1.bmp" alt="" /></a>
		<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['asidenews']['data'])) {?>
			<div class="newss">
				<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['inner_name'];?>
/news"><strong>Новости</strong></a>
				<div class="bl">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['asidenews']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<div class="new">
							<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" class="h2"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
							<time><?php echo $_smarty_tpl->tpl_vars['item']->value['create_time'];?>
</time>
							<p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
">Далее</a></p>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php }?>
		<a href="javascript:void(0);" rel="nofollow" class="baner" style="cursor: default;"><img src="/images/207-207-2.bmp" alt="" /></a>
		<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['asidearticles']['data'])) {?>
			<div class="stat">
				<a href="/<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['data']['inner_name'];?>
/articles/"><strong>Статьи о странах</strong></a>
				<div class="bl">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['asidearticles']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<div class="new">
							<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
" class="h2"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
							
							<p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
<a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value['inner_name'];?>
">Далее</a></p>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php }?>
		</div> 
	</div>
			<div class="line4">
		<a href="javascript:void(0);" rel="nofollow" class="baner clearer" style="cursor: default;"><img src="/images/728-90-2.jpg" alt="" /></a>
		<a href="javascript:void(0);" rel="nofollow" class="baner2" style="cursor: default;"><img src="/images/320-90.bmp" alt="" /></a>
	</div>
		</div>
	</div> 
	
	<div class="footer">
		<div class="wrapper">
			<div class="form">
				<div class="con">
					<strong>Свяжитесь с нами</strong>
					<form action="">
						<input type="text" placeholder="ФИО..." disabled />
						<input type="text" placeholder="Email" class="email" disabled />
						<textarea disabled>В настоящее время форма обратной связи не работает. Приносим свои извинения за причиненные неудобства.</textarea>
						<input type="submit" value="Отправить" disabled />
					</form>
					<ul>
						
						<li><img src="/images/phone.png" alt="">+7 966 177 70 15</li>
						<li><img src="/images/mail.png" alt=""><a href="mailto:info@lions-guides.ru">info@lions-guides.ru</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	 
	
	<footer>
		<p id="back-top" style="display: none;">
			<a href="/#top"><img src="/images/top.png" alt=""></a>
		</p>
		<p>© 2015 Путеводители и достопримечательности<br />Все работы защищены законом об авторском праве.</p>
	</footer>
	 
	
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.bxslider.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.autocolumnlist.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"><?php echo '</script'; ?>
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
	

	</body>
</html><?php }} ?>
