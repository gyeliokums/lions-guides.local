{extends file="guest/layout.tpl"}

{block name="body_breadcrumbs"}	<div class="page-title-container">
		<div class="container">
			<div class="page-title pull-left col-md-6">
				<h1 class="entry-title">{$data.position.country.name}: </i> {block name="page_type"}{/block}</h1>
			</div>{include file="guest/blogs/breadcrumbs.tpl"}
		</div>
	</div>{/block} {* end of body_breadcrumbs *}
