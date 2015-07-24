{extends file="guest/listlayout.tpl"}

{block name="page_type"}Кухня{/block}

{block name="body_main_content"}{include file="guest/blogs/country_menu.tpl"}
<div class="travelo-box question-list">
	<div class="toggle-container">
	{$i = 1}
		{foreach $data.entity.data as $item}
			<div class="panel style1">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#tgg{$i}" class="collapsed">{$item.name}</a>
				</h4>
				<div id="tgg{$i++}" class="panel-collapse collapse" style="height: auto;">
					<div class="panel-content">
						<div class="col-sm-10"><p>{$item.short_description}</p></div>
						<div class="col-sm-2 pull-right">
							<a href="/{$item.inner_name}" alt="{$item.name}" class="button full-width yellow btn-small text-center" title="" href="hotel-detailed.html">Читать</a>
						</div>
					</div>
				</div>
				
				
				<hr />
			</div>
		{/foreach}
	</div>
</div>
{/block}