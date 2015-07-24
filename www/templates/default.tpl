{extends file="layout.tpl"}
{block name="head_css"}<!-- Theme Styles -->
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
	<![endif]-->{/block} {* end of head_css *}

{block name="body_page_wrapper"}
	{block name="body_header"}
		<header id="header" class="navbar-static-top style7">
			<div class="container">
				<div class="pull-right hidden-mobile">
					<address class="contact-details">
						<span class="contact-phone"><i class="soap-icon-phone"></i>&nbsp;{$_contact_phone}</span>
						<a class="contact-email" href="mailto:{$_contact_email}"><i class="soap-icon-letter-1"></i> {$_contact_email}</a>
					</address>
				</div>
			</div>
		</header>
		<header id="header" class="navbar-static-top style1">
			<div class="container">
				<a href="/" class="logo">
					<span class="name">LIONS&nbsp;&amp;&nbsp;GUIDES</span>
					{block name="body_header_slogan"}<strong><span class="slogan">информация&nbsp;для&nbsp;туристов</span></strong>{/block}
				</a>
				{block name="body_header_banner"}
				{if $_banners.top.href}
				<div class="hidden-mobile top-banner pull-right">
					<a href="{$_banners.top.href}" target="_blank" rel="nofollow">
						<img src="{$_banners.top.src}" alt="{$_banners.top.alt}"{if $_banners.top.width!=0} width="{$_banners.top.width}"{/if}{if $_banners.top.height!=0} height="{$_banners.top.height}"{/if} />
					</a>
				</div>
				{/if}
				{/block}
			</div>
			{block name="body_through_menu"}{/block}
		</header>
		{* Мобильный баннер *}
		{block name="body_header_banner_mobile"}
		{if $_banners.top.href}
		<div id="mobile-banner" class="visible-mobile">
			<a href="{$_banners.top.href}" target="_blank" rel="nofollow">
				<img src="{$_banners.top.src}" alt="{$_banners.top.alt}" width="100%" {if $_banners.top.height!=0} height="{$_banners.top.height}"{/if} />
			</a>
		</div>
		{/if}
		{/block}
		{* Конец Мобильный баннер *}
	{/block} {* end of body_header *}
	{block name="body_breadcrumbs"}{/block} {* end of body_breadcrumbs *}
	{block name="body_main"}<section id="content">
		<div class="container">
			{block name="body_main_container"}<div class="row">
				<div id="main" class="col-md-9" style="margin-top: 30px;">{block name="body_main_content"}Тут контент{/block}</div>
				<div class="col-md-3" style="margin-top: 30px;">{block name="body_main_aside"}Тут блок слева{/block}</div>
			</div>{/block} {* end of body_main_container *}
		</div>
		{block name="body_main_bottom_banners"}	{* Баннеры Yandex & Google *}
			{include file="guest/blogs/banner_bottom.tpl"}
		{/block} {*end of body_main_bottom_banners *}
	</section>{/block} {* end of body_main *}

	{block name="body_footer"}<footer id="footer">
		<div class="bottom gray-area">
			<div class="container">
				<div class="pull-left copyright">
					<ul class="hidden-mobile social-icons clearfix">
						<li class="vk"><a target="_blank" href="http://vk.com/share.php?url=http://lions-guides.ru/{$_inner_name}" title="Поделиться в ВКонтакте" data-toggle="tooltip" data-original-title="vk.com"><i class="fa fa-vk"></i></a></li>
						<li class="googleplus"><a title="Поделиться в Google+" href="https://plus.google.com/share?url=http://lions-guides.ru/{$_inner_name}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="googleplus"><i class="fa fa-google-plus"></i></a></li>
						<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=http://lions-guides.ru/{$_inner_name}&t={if $_page_title}{$_page_title}{else}{block name='_page_title'}{/block}{/if}" title="Поделиться в Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="facebook"><i class="fa fa-facebook"></i></a></li>
						<li class="twitter"><a href="http://www.twitter.com/share?url=http://lions-guides.ru/{$_inner_name}&amp;text={if $_page_title}{$_page_title}{else}{block name='_page_title'}{/block}{/if}" title="Поделиться в Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" data-toggle="tooltip" data-original-title="twitter"><i class="fa fa-twitter"></i></a></li>
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
	</footer>{/block} {* end of body_footer*}
{/block}

{block name="body_bottom_javascript"}<!-- Javascript -->
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
	<!-- Yandex.Metrika informer -->{literal}
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
	<!-- /Yandex.Metrika counter -->{/literal}
{/block}