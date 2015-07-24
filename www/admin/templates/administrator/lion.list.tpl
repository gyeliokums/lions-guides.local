{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Достопримечательности</h2>
	</header>
	<header class="panel-heading custom-tab ">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="?model=lion&amp;parent_id={$data.common.parent_id}">Достопримечательности</a>
			</li>
			<li class="">
				<a href="?model=cityphotogallery&amp;parent_id={$data.common.parent_id}&amp;for=city">Галлерея</a>
			</li>
		</ul>
	</header>
{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
	<a href="?model={$data.common.model}&amp;action=add&amp;parent_id={$data.common.parent_id}">Добавить достопримечательность</a>
		<table class="table">
			<thead>
			<tr>
				<td>URL</td>
				<td>Название страны</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<tr>
				<td colspan="4"><a href="?model=city&amp;parent_id={$data.common.parent_id}&amp;back">&uArr; Вернуться к городам &uArr;</a></td>
			</tr>
			{foreach $data.lion.data as $lion}
				<tr>
					<td>{$lion.inner_name}</td>
					<td>{$lion.name}</td>
					<td><a href="?model=lion&amp;action=update&amp;id={$lion.id}">Изменить</a></td>
					<td><a href="?model=lion&amp;id={$lion.id}&amp;parent_id={$lion.parent_id}&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			{/foreach}
		</table>
		<a href="?model={$data.common.model}&amp;action=add&amp;parent_id={$data.common.parent_id}">Добавить достопримечательность</a>
	</div>
{/block}