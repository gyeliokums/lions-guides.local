{extends file="guest/listlayout.tpl"}

{block name="page_type"}{$data.breadcrumbs.data.entity_name}{/block}


{block name="body_main_content"}{include file="guest/blogs/country_menu.tpl"}
<div class="image-box style2 activities no-bottom-border">
	{foreach $data.entity.data as $item}
		<article class="box full-width">
			<figure class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0" style="-webkit-animation-duration: 1s; animation-duration: 1s; visibility: visible;">
				{if $item.image}
				<a href="/{$item.inner_name}" alt="{$item.name}"  class="hover-effect"><img width="270" height="160" alt="{$item.name}" src="{$item.image}"></a>
				{/if}
			</figure>
		
			<div class="details">
				<strong class="box-title header-news">{$item.name}</strong>
				<div class="pull-right">
					<a href="/{$item.inner_name}" alt="{$item.name}" class="button yellow btn-small text-center" title="" href="hotel-detailed.html">Читать</a>
				</div>
				<p>{$item.short_description}</p>
				
			</div>
			
	</article>
	{/foreach}
</div>
{/block}