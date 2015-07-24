{extends file="administrator/layout.tpl"}

{block name="head_meta"}{/block}
{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>"Объединенные государства"</h2>
		</header>
{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
		{*<a href="?model={$data.common.model}&amp;action=add">Добавить "объединение"</a>*}
{if $data.stateunion.data}
		<table class="table">
			<thead>
			<tr>
				<th>URL</th>
				<th>Название "материка"</th>
				{*<th colspan="2">Действие</th>*}
			</tr>
			</thead>
			{foreach $data.stateunion.data as $stateunion}
				<tr>
					<td><a href="?model=country&amp;parent_id={$stateunion.id}">{$stateunion.inner_name}&nbsp;&nbsp;&crarr;</a></td>
					<td>{$stateunion.name}</td>
					<td><a href="?model=stateunion&amp;action=update&amp;id={$stateunion.id}">Изменить</a></td>
					{*<td><a href="?model=stateunion&amp;id={$stateunion.id}&amp;action=remove&amp;submit=save|close">Удалить</a></td>*}
				</tr>
			{/foreach}
		</table>
		{*<a href="?model={$data.common.model}&amp;action=add">Добавить "объединение"</a>*}
	</div>
{/if}
{/block}