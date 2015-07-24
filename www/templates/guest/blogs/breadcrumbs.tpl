<div class="page-title pull-right col-md-6 col-sm-12 col-xs-12" >
	<ul class="breadcrumbs pull-right">
				{if $data.common.data.model!='index'}<li><a href="/">Home</a>
				{if $data.breadcrumbs.data.state_inner_name}
				<li><a href="/countries">Где провести отпуск</a>&nbsp;&#062;&nbsp;<a href="/countries#{$data.breadcrumbs.data.state_inner_name}">{$data.breadcrumbs.data.state_name}</a></li>
				{/if}
				{if $data.breadcrumbs.data.country_inner_name}
				<li><a href="/{$data.breadcrumbs.data.country_inner_name}">{$data.breadcrumbs.data.country_name}</a></li>
				{/if}
				{if $data.breadcrumbs.data.lion_inner_name}
				<li><a href="/{$data.breadcrumbs.data.entity_inner_name}">{$data.breadcrumbs.data.entity_name}</a></li>
				{/if}
				{/if}
	</ul>
</div>