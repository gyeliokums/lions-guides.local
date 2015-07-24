{extends file="default.tpl"}

{block name="body_header_slogan"}<h1><span class="slogan">информация&nbsp;для&nbsp;туристов</span></h1>{/block}

{block name="body_main"}
	{* Путеводители *}
	{include file="guest/blogs/guides_short.tpl"}
	{* Достопримечательности *}
	{include file="guest/blogs/lions_long.tpl"}
	{* Баннер сквозной для index & countries дорогой *}
	{*{if $_banners.middle[0].href}
	<div class="container">
		<div class="row">
			<a href="{$_banners.middle[0].href}" target="_blank" rel="nofollow">
				<img src="{$_banners.middle[0].src}" class="img-responsive" alt="{$_banners.middle[0].alt}"{if $_banners.middle[0].width!=0} width="{$_banners.middle[0].width}"{/if}{if $_banners.middle[0].height!=0} height="{$_banners.middle[0].height}"{/if} />
			</a>
		</div>
	</div>
	{/if}*}
	{include file="guest/blogs/banner_middle_long.tpl"}
	{* Новости *}
	{include file="guest/blogs/news_long.tpl"}
	{* Статьи *}
	{include file="guest/blogs/articles_long.tpl"}
	{* Баннер сквозной для index & countries дорогой *}
	{*{if $_banners.middle[1].href}
	<div class="container">
		<div class="row">
			<a href="{$_banners.middle[1].href}" target="_blank" rel="nofollow">
				<img src="{$_banners.middle[1].src}" class="img-responsive" alt="{$_banners.middle[1].alt}"{if $_banners.middle[1].width!=0} width="{$_banners.middle[1].width}"{/if}{if $_banners.middle[1].height!=0} height="{$_banners.middle[1].height}"{/if} />
			</a>
		</div>
	</div>
	{/if}*}
	{include file="guest/blogs/banner_middle_long.tpl"}
	{* Избранные страны *}
	{include file="guest/blogs/countries_short.tpl"}
	{* Шоппинг *}
	{include file="guest/blogs/shopping_short.tpl"}
	{* Баннеры Yandex & Google *}
	{include file="guest/blogs/banner_bottom.tpl"}
{/block} {* end of body_main *}

{block name="body_bottom_javascript" append}{literal}	<script type="text/javascript">
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
	</script>{/literal}{/block} {* end of body_bottom_javascript *}
