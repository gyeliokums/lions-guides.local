{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Баннеры</h2>
	</header>
{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
		<a href="?model=banner&amp;action=add">Добавить баннер</a>
		<table class="table">
			<thead>
			<tr>
				<td>URL</td>
				<td>Название статьи</td>
				<td>Истекает</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			<tr>
				<td colspan="4"><a href="?model=country&amp;parent_id={$data.common.parent_id}&amp;back">&uArr; Вернуться к странам &uArr;</a></td>
			</tr>
			{foreach $data.banner.data as $banner}
				<tr>
					<td>{$banner.inner_name}</td>
					<td>{$banner.name}</td>
					<td>{$banner.expiration_date}</td>
					<td><a href="?model=banner&amp;action=update&amp;id={$banner.id}">Изменить</a></td>
					<td><a href="?model=banner&amp;id={$banner.id}&amp;action=remove&amp;save">Удалить</a></td>
				</tr>
			{/foreach}
		</table>
		<a href="?model=article&amp;action=add">Добавить баннер</a>
	</div>
{/block}