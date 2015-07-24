<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-21 14:29:46
         compiled from ".\templates\guest\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2371655289cc2dbbf02-82351695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ec428338c3ddea3f3671e6de5befa97ec4171f' => 
    array (
      0 => '.\\templates\\guest\\index.tpl',
      1 => 1433245886,
      2 => 'file',
    ),
    'fbf0fd8bed3d1292954879f1606a0a1d7e20cd3f' => 
    array (
      0 => '.\\templates\\guest\\layout.tpl',
      1 => 1433245616,
      2 => 'file',
    ),
    'ceababc786c4e6e4576bda1df2224e1505f0d0cd' => 
    array (
      0 => '.\\templates\\_consts.tpl',
      1 => 1433246192,
      2 => 'file',
    ),
    'baebdf59e6b51489abe87a15d6adf5ff713d155f' => 
    array (
      0 => '.\\templates\\default.tpl',
      1 => 1433246052,
      2 => 'file',
    ),
    '67312b7474fea577331688c6abb5fd3e5e621a11' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1427968320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2371655289cc2dbbf02-82351695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55289cc321f561_35271597',
  'variables' => 
  array (
    '_page_title' => 0,
    '_page_keywords' => 0,
    '_page_description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55289cc321f561_35271597')) {function content_55289cc321f561_35271597($_smarty_tpl) {?><!DOCTYPE HTML>
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
					<strong><span class="slogan">информация для туристов</span></strong>
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
		<div class="guides">
			<h2>Путеводители</h2>
			<ul id="selector">
				<?php  $_smarty_tpl->tpl_vars['guide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['guide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['guides']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['guide']->key => $_smarty_tpl->tpl_vars['guide']->value) {
$_smarty_tpl->tpl_vars['guide']->_loop = true;
?>
					<li><a href="/<?php echo $_smarty_tpl->tpl_vars['guide']->value['inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['guide']->value['name'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
		<a href="javascript:void(0);" rel="nofollow" style="cursor: default;" class="baner"><img src="/images/180-150-2.bmp" alt="" /></a>
		<div class="lions">
			<h2>Достопримечательности</h2>
			<ul id="selector2">
				<?php  $_smarty_tpl->tpl_vars['lion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['lions']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lion']->key => $_smarty_tpl->tpl_vars['lion']->value) {
$_smarty_tpl->tpl_vars['lion']->_loop = true;
?>
					<li><a href="/<?php echo $_smarty_tpl->tpl_vars['lion']->value['inner_name'];?>
"><img src="/uploads/images/stateunion/<?php echo $_smarty_tpl->tpl_vars['lion']->value['union_id'];?>
/country/<?php echo $_smarty_tpl->tpl_vars['lion']->value['country_id'];?>
/city/<?php echo $_smarty_tpl->tpl_vars['lion']->value['city_id'];?>
/lion/<?php echo $_smarty_tpl->tpl_vars['lion']->value['lion_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['lion']->value['image_name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lion']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lion']->value['short_description'];?>
" /></a></li>
				<?php } ?>
			</ul>
		</div>
		<a href="javascript:void(0);" rel="nofollow" style="cursor: default;" class="baner"><img src="/images/180-150-1.bmp" alt="" /></a>
		<div class="hr">&nbsp;</div>
		<div class="news">
			<h3>Новости</h3>
			<div class="bl">
				<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
					<div class="new">
						<a href="/<?php echo $_smarty_tpl->tpl_vars['news']->value['inner_name'];?>
" class="h1"><?php echo $_smarty_tpl->tpl_vars['news']->value['name'];?>
</a>
						<time><?php echo $_smarty_tpl->tpl_vars['news']->value['create_time'];?>
</time>
						<p><?php echo strip_tags($_smarty_tpl->tpl_vars['news']->value['short_description']);?>
<a href="/<?php echo $_smarty_tpl->tpl_vars['news']->value['inner_name'];?>
">Далее</a></p>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="interesting">
			<h3>Это интересно</h3>

			<ul>
				<?php  $_smarty_tpl->tpl_vars['souvenir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['souvenir']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['souvenir']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['souvenir']->key => $_smarty_tpl->tpl_vars['souvenir']->value) {
$_smarty_tpl->tpl_vars['souvenir']->_loop = true;
?>
				<hr /><li><a href="<?php echo $_smarty_tpl->tpl_vars['souvenir']->value['inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['souvenir']->value['name'];?>
</a></li>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['shopping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shopping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['shopping']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shopping']->key => $_smarty_tpl->tpl_vars['shopping']->value) {
$_smarty_tpl->tpl_vars['shopping']->_loop = true;
?>
				<hr /><li><a href="<?php echo $_smarty_tpl->tpl_vars['shopping']->value['inner_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['shopping']->value['name'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
		<a href="javascript:void(0);" rel="nofollow" style="cursor: default;" class="baner2"><img src="/images/300-250.bmp" alt="" /></a>
		<div class="stat">
			<h3>Статьи о странах</h3>
			<div class="bl">
				<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['articles']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
					<div class="new">
						<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['inner_name'];?>
" class="h1"><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</a>
						<p><?php echo strip_tags($_smarty_tpl->tpl_vars['article']->value['short_description']);?>
<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['inner_name'];?>
">Далее</a></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
		<div class="line4">
		<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable("2", null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['countries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countries']->_loop = false;
 $_smarty_tpl->tpl_vars['union'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['unions']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['countries']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['countries']->iteration=0;
 $_smarty_tpl->tpl_vars['countries']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['countries']->key => $_smarty_tpl->tpl_vars['countries']->value) {
$_smarty_tpl->tpl_vars['countries']->_loop = true;
 $_smarty_tpl->tpl_vars['union']->value = $_smarty_tpl->tpl_vars['countries']->key;
 $_smarty_tpl->tpl_vars['countries']->iteration++;
 $_smarty_tpl->tpl_vars['countries']->index++;
 $_smarty_tpl->tpl_vars['countries']->first = $_smarty_tpl->tpl_vars['countries']->index === 0;
 $_smarty_tpl->tpl_vars['countries']->last = $_smarty_tpl->tpl_vars['countries']->iteration === $_smarty_tpl->tpl_vars['countries']->total;
?>
			<div class="country<?php if (!$_smarty_tpl->tpl_vars['countries']->first&&!$_smarty_tpl->tpl_vars['countries']->last) {?> col<?php echo $_smarty_tpl->tpl_vars['i']->value++;
} elseif ($_smarty_tpl->tpl_vars['countries']->last) {?> last<?php }?>">
				<div class="name">
					<h4><?php echo $_smarty_tpl->tpl_vars['union']->value;?>
</h4>
				</div>
				<ul class="selector4">
					<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
						<li><a href="/<?php echo $_smarty_tpl->tpl_vars['country']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>
		<div class="show-all"><a href="/countries/">&lt;&lt;&nbsp;Показать все&nbsp;&gt;&gt;</a></div>
		<a href="javascript:void(0);" rel="nofollow" class="baner clearer" style="cursor: default;"><img src="/images/728-90-2.jpg" alt="" class="baner clearer" /></a>
		<a href="javascript:void(0);" rel="nofollow" class="baner2" style="cursor: default;"><img src="/images/320-90.bmp" alt="" class="baner2" /></a>
	</div>
			<div id="socseti" style="float: right; margin-bottom: 5px; margin-right:30px;">
				<a target="_blank" rel="nofollow" href="http://www.facebook.com/sharer.php?u=http://lions-guides.ru/<?php echo $_smarty_tpl->tpl_vars['_inner_name']->value;?>
&t=<?php if ($_smarty_tpl->tpl_vars['_page_title']->value) {
echo $_smarty_tpl->tpl_vars['_page_title']->value;
} else { ?>Путеводители по городам и странам. Описание достопримечательностей.<?php }?>" title="Поделиться в Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="/images/soc/FB.png" alt="Поделиться в Facebook" style="width: 32px;" /></a>
				<a target="_blank" rel="nofollow" href="http://vk.com/share.php?url=http://lions-guides.ru/<?php echo $_smarty_tpl->tpl_vars['_inner_name']->value;?>
" title="Поделиться в ВКонтакте" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="/images/soc/VK.png" alt="Поделиться в Facebook" style="width: 32px;" /></a>
				<a rel="nofollow" href="https://plus.google.com/share?url=http://lions-guides.ru/<?php echo $_smarty_tpl->tpl_vars['_inner_name']->value;?>
" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="/images/soc/G.png" alt="Поделиться в Google+" style="width: 32px;" /></a>
				<a target="_blank" rel="nofollow" href="http://www.twitter.com/share?url=http://lions-guides.ru/<?php echo $_smarty_tpl->tpl_vars['_inner_name']->value;?>
&amp;text=<?php if ($_smarty_tpl->tpl_vars['_page_title']->value) {
echo $_smarty_tpl->tpl_vars['_page_title']->value;
} else { ?>Путеводители по городам и странам. Описание достопримечательностей.<?php }?>" title="Поделиться в Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="/images/soc/Twitter.png" alt="Поделиться в Twitter" style="width: 32px;" /></a>
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
