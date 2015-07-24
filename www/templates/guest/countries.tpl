{extends file="guest/listlayout.tpl"}

{block name="body_breadcrumbs"}	<div class="page-title-container">
		<div class="container">
			<div class="page-title pull-left">
				<h1 class="entry-title">Где провести отпуск</h1>
			</div>
			<ul class="breadcrumbs pull-right">
				<li><a href="/">Home</a></li>
			</ul>
		</div>
	</div>{/block} {* end of body_breadcrumbs *}

{block name="body_main_container"}
			{$i = 1}
			<div id="main" class="md-section">
				{foreach $data.stateunions.data as $state}
				<h2 id="{$state.inner_name}" name="{$state.inner_name}" class="no-margin">{$state.name}</h2>
				<div class="small-box"></div>
				<div class="row image-box style1 add-clearfix">
					{if $state.children}
						{foreach $state.children as $country}
					<div class="col-sm-6 col-md-3">
						<article class="box country">
							<div class="details">
								<a  title="{$country.name}" href="/{$country.inner_name}">
									<h4 class="box-title">{$country.name}</h4>
								</a>
							</div>
						</article>
					</div>
						{/foreach}
					{/if}
				</div>
				{if $i % 2 == 0}
					{include file="guest/blogs/banner_middle_long.tpl"}
				{/if}
				{$i = $i + 1}
				{/foreach}
			</div>{/block} {* end of body_main_container *}

{block name="body_bottom_javascript" append}{literal}	<script type="text/javascript">
		tjq(document).ready(
			function () {
				window.location.hash = window.location.hash;
			}
		);
	</script>{/literal}{/block}{* end of body_bottom_javascript *}
{/block}