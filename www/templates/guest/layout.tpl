{extends file="default.tpl"}

{block name="body_breadcrumbs"}	<div class="page-title-container">
		<div class="container">
			<div class="page-title pull-left col-md-6">
				<h1 class="entry-title">{$data.entity.data.name}</h1>
			</div>
			{include file="guest/blogs/breadcrumbs.tpl"}
		</div>
	</div>{/block} {* end of body_breadcrumbs *}

{block name="body_main_content"}{include file="guest/blogs/country_menu.tpl"}
	<div class="content-details">
		<div class="details">
			{$data.entity.data.description}
		</div>
	</div>
{/block} {* end of body_main_content *}

{block name="body_main_aside"}	{if is_array($data.banners.data)}{include file="guest/blogs/banner_middle_short.tpl"}{/if}
	{if is_array($data.news_blog.data) && !empty($data.news_blog.data)}{include file="guest/blogs/news_short.tpl"}{/if}
	{if is_array($data.banners.data)}{include file="guest/blogs/banner_middle_short.tpl"}{/if}
	{if is_array($data.article_blog.data) && !empty($data.article_blog.data)}{include file="guest/blogs/articles_short.tpl"}{/if}{/block} {* end of body_main_aside *}