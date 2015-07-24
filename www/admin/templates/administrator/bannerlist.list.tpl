{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Баннеры</h2>
	</header>
{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
		<h3 class="overdue">Срок действия просрочен</h3>
		<table class="table overdue">
			<thead>
			<tr>
				<td>Рекламодатель</td>
				<td>Альтернативный текст</td>
				<td>Дата окончания</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			{foreach $data.bannerlist.overdue as $banner}
				<tr>
					<td>{$banner.company_name}</td>
					<td>{$banner.alt_text}</td>
					<td>{$banner.expiration_date}</td>
					<td><a href="?model=banner&amp;action=update&amp;id={$banner.id}&amp;referrer=bannerlist">Изменить</a></td>
					<td><a href="?model=banner&amp;id={$banner.id}&amp;parent_id={$banner.parent_id}&amp;referrer=bannerlist&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			{/foreach}
		</table>
		<hr />
		<h3 class="near-expiration">Срок действия будет просрочен в течении 10 дней</h3>
		<table class="table near-expiration">
			<thead>
			<tr>
				<td>Рекламодатель</td>
				<td>Альтернативный текст</td>
				<td>Дата окончания</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			{foreach $data.bannerlist.near_expiration as $banner}
				<tr>
					<td>{$banner.company_name}</td>
					<td>{$banner.alt_text}</td>
					<td>{$banner.expiration_date}</td>
					<td><a href="?model=banner&amp;action=update&amp;id={$banner.id}&amp;referrer=bannerlist">Изменить</a></td>
					<td><a href="?model=banner&amp;id={$banner.id}&amp;parent_id={$banner.parent_id}&amp;referrer=bannerlist&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			{/foreach}
		</table>
		<hr />
		<h3 class="long-expiration">Срок действия будет просрочен от 10 дней до 1 месяца</h3>
		<table class="table long-expiration">
			<thead>
			<tr>
				<td>Рекламодатель</td>
				<td>Альтернативный текст</td>
				<td>Дата окончания</td>
				<td colspan="2">Действие</td>
			</tr>
			</thead>
			{foreach $data.bannerlist.long_expiration as $banner}
				<tr>
					<td>{$banner.company_name}</td>
					<td>{$banner.alt_text}</td>
					<td>{$banner.expiration_date}</td>
					<td><a href="?model=banner&amp;action=update&amp;id={$banner.id}&amp;referrer=bannerlist">Изменить</a></td>
					<td><a href="?model=banner&amp;id={$banner.id}&amp;parent_id={$banner.parent_id}&amp;referrer=bannerlist&amp;action=remove&amp;submit=save|close">Удалить</a></td>
				</tr>
			{/foreach}
		</table>
	</div>
{/block}