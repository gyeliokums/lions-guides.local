{extends file="guest/layout.tpl"}

{block name="body_breadcrumbs"}	<div class="page-title-container">
		<div class="container">
			<div class="page-title pull-left">
				<h1 class="entry-title">{$data.entity.data.name}</h1>
			</div>
			<div class="page-title pull-right col-md-5" >
				<ul class="breadcrumbs pull-right">
					<li><a href="/">Home</a>
					<li><a href="/countries">Где провести отпуск</a>&nbsp;&#062;&nbsp;<a href="/countries#{$data.breadcrumbs.data.state_inner_name}">{$data.breadcrumbs.data.state_name}</a></li>
				</ul>
			</div>
		</div>
	</div>{/block} {* end of body_breadcrumbs *}

{block name="body_main_content"}{include file="guest/blogs/country_menu.tpl"}
	<div class="row promo-block">
		<div class="col-md-12 content-details promo-content">
			<h2 class="header-news" style="margin: 0;">Достопримечательности</h2>
			<div class="details">
				<ul class=" list-inline">
					{foreach $data.entity.data.lions as $item}
					<li class="col-md-6 sm-link"><a  href="/{$item.link}">{$item.name}</a></li>
					{/foreach}
				</ul>
			</div>
		</div>
		<div class="col-md-12 content-details promo-content">
			<h2 class="header-news" style="margin: 0;">Путеводители</h2>
			<div class="details">
				<ul class="list-inline">
					{foreach $data.entity.data.guides as $item}
					<li class="col-md-6"><a href="/{$item.link}">{$item.name}</a></li>
					{/foreach}
				</ul>
			</div>
		</div>
	</div>
	<div class="content-details">
		<div class="details">
			<p>{$data.entity.data.description}</p>
		</div>
	</div>
	<storng>Города</storng>
	<div class="row image-box listing-style2">
		{foreach $data.entity.data.cities as $item}
		<div class="col-sm-6 col-md-4">
        	<article class="box">
        		<figure class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0" style="-webkit-animation-duration: 1s; animation-duration: 1s; visibility: visible;">
					<a href="/{$item.inner_name}"><img src="{$item.image}" alt="{$item.name}" /></a>
				</figure>
				<div class="details">
					<strong class="guides-title-box">{$item.name}</strong>
					<p>{$item.short_description}</p>
					<a href="/{$item.inner_name}" alt="{$item.name}" class="button yellow btn-small text-center full-width" title="" href="hotel-detailed.html">Читать</a>
				</div>
		</div>
		{/foreach}
	</div>{/block}