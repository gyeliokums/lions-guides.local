{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Страны</h2>
	</header>
{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
		<a href="?model=country&amp;action=add&amp;parent_id={$data.common.parent_id}">Добавить страну</a>
		<table class="table">
			<thead>
			<tr>
				<td>URL</td>
				<td>Название страны</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<tr>
				<td colspan="4"><a href="?model=stateunion&amp;back">&uArr; Вернуться к "объединениям государств" &uArr;</a></td>
			</tr>
			{foreach $data.country.data as $country}
				<tr>
					<td><a href="?model=city&amp;parent_id={$country.id}">{$country.inner_name}&nbsp;&nbsp;&crarr;</a></td>
					<td>{$country.name}</td>
					<td><a href="?model=country&amp;action=update&amp;id={$country.id}">Изменить</a></td>
					<td><a href="?model=country&amp;id={$country.id}&amp;parent_id={$country.parent_id}&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			{/foreach}
		</table>
		<a href="?model=country&amp;action=add&amp;parent_id={$data.common.parent_id}">Добавить страну</a>
	</div>
{/block}