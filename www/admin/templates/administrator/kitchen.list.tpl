{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Кухня</h2>
	</header>
	<header class="panel-heading custom-tab ">
		<ul class="nav nav-tabs">
			<li><a href="?model=city&amp;parent_id={$data.common.parent_id}">Города</a></li>
			<li><a href="?model=article&amp;parent_id={$data.common.parent_id}">Статьи</a></li>
			<li><a href="?model=guide&amp;parent_id={$data.common.parent_id}">Путеводители</a></li>
			<li class="active"><a href="?model=kitchen&amp;parent_id={$data.common.parent_id}">Кухня</a></li>
			<li><a href="?model=news&amp;parent_id={$data.common.parent_id}">Новости</a></li>
			<li><a href="?model=souvenir&amp;parent_id={$data.common.parent_id}">Сувениры</a></li>
			<li><a href="?model=shopping&amp;parent_id={$data.common.parent_id}">Шоппинг</a></li>
			<li><a href="?model=banner&amp;parent_id={$data.common.parent_id}">Баннеры</a></li>
		</ul>
	</header>
{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
		<a href="?model={$data.common.model}&amp;action=add&amp;parent_id={$data.common.parent_id}">Добавить "кухню"</a>
		<table class="table">
			<thead>
			<tr>
				<td>URL</td>
				<td>Название "кухни"</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<tr>
				<td colspan="4"><a href="?model=country&amp;parent_id={$data.common.parent_id}&amp;back">&uArr; Вернуться к странам &uArr;</a></td>
			</tr>
			{foreach $data.kitchen.data as $kitchen}
				<tr>
					<td>{$kitchen.inner_name}</td>
					<td>{$kitchen.name}</td>
					<td><a href="?model=kitchen&amp;action=update&amp;id={$kitchen.id}">Изменить</a></td>
					<td><a href="?model=kitchen&amp;id={$kitchen.id}&amp;parent_id={$kitchen.parent_id}&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			{/foreach}
		</table>
		<a href="?model={$data.common.model}&amp;action=add&amp;parent_id={$data.common.parent_id}">Добавить "кухню"</a>
	</div>
{/block}