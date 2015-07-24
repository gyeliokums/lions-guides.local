<?php /*%%SmartyHeaderCode:197155a130266875b1-12579125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db3b23e37dd5c06bf9dc2ead914d25723cdd54ff' => 
    array (
      0 => '.\\templates\\guest\\articles.tpl',
      1 => 1436538567,
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
      1 => 1436538566,
      2 => 'file',
    ),
    '4ded93a1a904c01d9cb90daff7f01462dcc8dd36' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1436538585,
      2 => 'file',
    ),
    'd571f808fefd5e080997bf99f0b40c6a83348e08' => 
    array (
      0 => '.\\templates\\guest\\blogs\\breadcrumbs.tpl',
      1 => 1436538571,
      2 => 'file',
    ),
    '8df2edd9e2dadcc5b1f7b4c1dd8c620ccaea3bbb' => 
    array (
      0 => '.\\templates\\guest\\blogs\\country_menu.tpl',
      1 => 1436538572,
      2 => 'file',
    ),
    '7b946455cf58dc3bad2966358deca399bbf8893b' => 
    array (
      0 => '.\\templates\\guest\\blogs\\banner_middle_short.tpl',
      1 => 1436593744,
      2 => 'file',
    ),
    '16ed05f393fa54d9510edb305c8543c4e831a092' => 
    array (
      0 => '.\\templates\\guest\\blogs\\news_short.tpl',
      1 => 1436538575,
      2 => 'file',
    ),
    'f8bb49bf00b7b73fd5ac374922dfa65ef163c59f' => 
    array (
      0 => '.\\templates\\guest\\blogs\\articles_short.tpl',
      1 => 1436538569,
      2 => 'file',
    ),
    '2e5fb5e8a9216bf57a35ec922dc155ca7e0f376a' => 
    array (
      0 => '.\\templates\\guest\\blogs\\banner_bottom.tpl',
      1 => 1436540244,
      2 => 'file',
    ),
    '02d0103f40f028cd40bab985a0923df18a55ff62' => 
    array (
      0 => '.\\templates\\_consts.tpl',
      1 => 1436538565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197155a130266875b1-12579125',
  'variables' => 
  array (
    '_page_title' => 0,
    '_page_keywords' => 0,
    '_page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a130277087e1_58254774',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a130277087e1_58254774')) {function content_55a130277087e1_58254774($_smarty_tpl) {?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
	<title>Путеводители по городам и странам. Описание достопримечательностей.</title>
	<meta charset="utf-8">
	<meta name="keywords" content="путеводители, достопримечательности,туризм, кухня, шоппинг" />
	<meta name="description" content="Путеводители по городам и странам мира. Подробное описание достопримечательностей. Статьи о кухне, шоппинге и сувенирах. Полезная информация для туристов." />
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
	<script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page-wrapper">
	
	
		<header id="header" class="navbar-static-top style7">
			<div class="container">
				<div class="pull-right hidden-mobile">
					<address class="contact-details">
						<span class="contact-phone"><i class="soap-icon-phone"></i>&nbsp;+7 (966) 177 70 15</span>
						<a class="contact-email" href="mailto:info@lions-guides.ru"><i class="soap-icon-letter-1"></i> info@lions-guides.ru</a>
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
					
												<a href="javascript:void(0);" target="_blank" rel="nofollow">
							<img src="http://test.lions-guides.ru/uploads/banners/3.jpg" alt="0" width="610" height="160" />
						</a>
											
				</div>
				
			</div>
			
		</header>
		
		<div id="mobile-banner" class="visible-mobile">					
			
								<a href="javascript:void(0);" target="_blank" rel="nofollow">
					<img src="http://test.lions-guides.ru/uploads/banners/3.jpg" alt="0" width="100%"  height="160" />
				</a>
							
		</div>
		
	 
		<div class="page-title-container">
		<div class="container">
			<div class="page-title pull-left col-md-6">
				<h1 class="entry-title">Алтайский край: </i> Список статей</h1>
			</div><div class="page-title pull-right col-md-6 col-sm-12 col-xs-12" >
	<ul class="breadcrumbs pull-right">
				<li><a href="/">Home</a>
								<li><a href="/countries">Где провести отпуск</a>&nbsp;&#062;&nbsp;<a href="/countries#Russia">Россия</a></li>
												<li><a href="/Altai-Krai">Алтайский край</a></li>
													</ul>
</div>		</div>
	</div> 
	<section id="content">
		<div class="container">
			<div class="row">
				<div id="main" class="col-md-9" style="margin-top: 30px;">	<div class="tab-container">
		<ul class="tabs">
			<li class=""><a href="/Altai-Krai/guides/">Путеводители</a></li>
			<li class=""><a href="/Altai-Krai/cooking/">Кухня</a></li>
			<li class=""><a href="/Altai-Krai/souvenirs/">Сувениры</a></li>
			<li class=""><a href="/Altai-Krai/shopping/">Шоппинг</a></li>
		</ul>
	</div><div class="image-box style2 activities no-bottom-border">
			<article class="box full-width">
		
			<figure class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0" style="-webkit-animation-duration: 1s; animation-duration: 1s; visibility: visible;">
							</figure>
		
			<div class="details">
				<h4 class="box-title">Курорты Алтайского края</h4>
				<div class="pull-right">
					<a href="/Altai-Krai/article/resorts-of-Altai-Krai" alt="Курорты Алтайского края" class="button yellow btn-small text-center" title="" href="hotel-detailed.html">Читать</a>
				</div>
				<p>Курортный отдых на Алтае - прикосновение к природе. </p>
				
			</div>
			
	</article>
			<article class="box full-width">
		
			<figure class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0" style="-webkit-animation-duration: 1s; animation-duration: 1s; visibility: visible;">
							</figure>
		
			<div class="details">
				<h4 class="box-title">Санатории Белокурихи</h4>
				<div class="pull-right">
					<a href="/Altai-Krai/article/health-resort-Belokurikha" alt="Санатории Белокурихи" class="button yellow btn-small text-center" title="" href="hotel-detailed.html">Читать</a>
				</div>
				<p>Описание и контакты лучших санаториев курорта Белокуриха.</p>
				
			</div>
			
	</article>
	</div>
</div>
				<div class="col-md-3" style="margin-top: 30px;">					<figure>
			<a href="_click.php?cid=" target="_blank" rel="nofollow"><img src="" alt="" /></a>
		</figure>
	<div class="travelo-box contact-box">
	<a href="/Altai-Krai/news/"><strong class="header-news">Новости</strong></a>
		<div class="details">
		<a href="/Altai-Krai/news/canids-hunt-in-Altai" class="box-title news-title-box">На Алтае вновь становится популярной царская псовая охота.<small style="margin-bottom: 4px;">2015-05-26 16:46:56</small></a>
		<p class="description">На Алтае возрождают традиции псовой охоты.</p>
		<span class="clearfix"> <a href="/Altai-Krai/news/canids-hunt-in-Altai" class="button yellow full-width uppercase btn-small">Читать</a>
	</div>
	</div>
					<figure>
			<a href="_click.php?cid=" target="_blank" rel="nofollow"><img src="" alt="" /></a>
		</figure>
	<div class="travelo-box contact-box">
	<a href="/Altai-Krai/articles/"><strong class="header-news">Статьи</strong></a>
		<div class="details">
		<a href="/Altai-Krai/article/health-resort-Belokurikha" class="box-title news-title-box">Санатории Белокурихи</a>
		<p class="description">Описание и контакты лучших санаториев курорта Белокуриха.</p>
		<span class="clearfix"> <a href="/Altai-Krai/article/health-resort-Belokurikha/" class="button green full-width uppercase btn-small">Читать</a>
	</div>
		<div class="details">
		<a href="/Altai-Krai/article/resorts-of-Altai-Krai" class="box-title news-title-box">Курорты Алтайского края</a>
		<p class="description">Курортный отдых на Алтае - прикосновение к природе. </p>
		<span class="clearfix"> <a href="/Altai-Krai/article/resorts-of-Altai-Krai/" class="button green full-width uppercase btn-small">Читать</a>
	</div>
	</div></div>
			</div> 
		</div>
			
						<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 animated" style="padding-bottom: 20px" data-animation-type="fadeInDown" data-animation-delay="0">
												<a href="http://yandex.ru/" target="_blank" rel="nofollow">
							<img class="img-responsive" src="http://placehold.it/570x160" alt="Yandex banner" />
						</a>
											</div>
					<div class="col-sm-6 col-md-6 animated" data-animation-type="fadeInDown" data-animation-delay="0">
												<a href="http://google.com/" target="_blank" rel="nofollow">
							<img class="img-responsive" src="http://placehold.it/570x160" alt="Google banner" />
						</a>
											</div>
				</div>
			</div>		 
	</section> 

	<footer id="footer">
		<div class="bottom gray-area">
			<div class="container">
				<div class="pull-left copyright">
					<ul class="hidden-mobile social-icons clearfix">
						<li class="vk"><a target="_blank" href="http://vk.com/share.php?url=http://lions-guides.ru/" title="Поделиться в ВКонтакте" data-toggle="tooltip" data-original-title="vk.com"><i class="fa fa-vk"></i></a></li>
						<li class="googleplus"><a title="Поделиться в Google+" href="https://plus.google.com/share?url=http://lions-guides.ru/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="googleplus"><i class="fa fa-google-plus"></i></a></li>
						<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=http://lions-guides.ru/&t=Путеводители по городам и странам. Описание достопримечательностей." title="Поделиться в Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="facebook"><i class="fa fa-facebook"></i></a></li>
						<li class="twitter"><a href="http://www.twitter.com/share?url=http://lions-guides.ru/&amp;text=Путеводители по городам и странам. Описание достопримечательностей." title="Поделиться в Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="twitter"><i class="fa fa-twitter"></i></a></li>
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
	<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery.noconflict.js"></script>
	<script type="text/javascript" src="/js/modernizr.2.7.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.1.10.4.min.js"></script>
	<!-- Twitter Bootstrap -->
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<!-- load revolution slider scripts -->
	<script type="text/javascript" src="/components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
	<!-- load BXSlider scripts -->
	<script type="text/javascript" src="/components/jquery.bxslider/jquery.bxslider.min.js"></script>
	<!-- Flex Slider -->
	<script type="text/javascript" src="/components/flexslider/jquery.flexslider.js"></script>
	<!-- parallax -->
	<script type="text/javascript" src="/js/jquery.stellar.min.js"></script>
	<!-- waypoint -->
	<script type="text/javascript" src="/js/waypoints.min.js"></script>
	<!-- load page Javascript -->
	<script type="text/javascript" src="/js/theme-scripts.js"></script>
	<script type="text/javascript" src="/js/scripts.js"></script>
	<!-- Yandex.Metrika informer -->
	<a href="https://metrika.yandex.ru/stat/?id=29652860&amp;from=informer" style="position:absolute; left:-9999px;" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/29652860/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:29652860,lang:'ru'});return false}catch(e){}"/></a>
    <!-- /Yandex.Metrika informer -->
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
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
    </script>
	<noscript><div><img src="//mc.yandex.ru/watch/29652860" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

</body>
</html><?php }} ?>
