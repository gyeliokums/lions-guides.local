{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Города</h2>
	</header>
	<header class="panel-heading custom-tab ">
		<ul class="nav nav-tabs">
			<li class="active"><a href="?model=city&amp;parent_id={$data.common.parent_id}">Города</a></li>
			<li><a href="?model=article&amp;parent_id={$data.common.parent_id}">Статьи</a></li>
			<li><a href="?model=guide&amp;parent_id={$data.common.parent_id}">Путеводители</a></li>
			<li><a href="?model=kitchen&amp;parent_id={$data.common.parent_id}">Кухня</a></li>
			<li><a href="?model=news&amp;parent_id={$data.common.parent_id}">Новости</a></li>
			<li><a href="?model=souvenir&amp;parent_id={$data.common.parent_id}">Сувениры</a></li>
			<li><a href="?model=shopping&amp;parent_id={$data.common.parent_id}">Шоппинг</a></li>
			<li><a href="?model=banner&amp;parent_id={$data.common.parent_id}">Баннеры</a></li>
		</ul>
	</header>

{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
	<a href="?model=city&amp;action=add&amp;parent_id={$data.common.parent_id}">Добавить город</a>
		<table class="table">
			<thead>
			<tr>
				<td>URL</td>
				<td>Название страны</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<tr>
				<td colspan="3"><a href="?model=country&amp;parent_id={$data.common.parent_id}&amp;back">&uArr; Вернуться к странам &uArr;</a></td>
			</tr>
			{foreach $data.city.data as $city}
				<tr>
					<td><a href="?model=lion&amp;parent_id={$city.id}">{$city.inner_name}&nbsp;&nbsp;&crarr;</a></td>
					<td>{$city.name}</td>
					<td><a href="?model=city&amp;action=update&amp;id={$city.id}">Изменить</a></td>
					<td><a href="?model=city&amp;id={$city.id}&amp;parent_id={$city.parent_id}&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			{/foreach}
		</table>
		<a href="?model=city&amp;action=add&amp;parent_id={$data.common.parent_id}">Добавить город</a>
	</div>
{/block}