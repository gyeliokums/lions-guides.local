{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Логи</h2>
	</header>
{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
		<table class="table">
			<thead>
			<tr>
				<td>Время</td>
				<td>Пользователь</td>
				<td>Действие</td>
			</tr>
			</thead>
			{foreach $data.logsdb.data as $logs}
				<tr>
					<td>{$logs.time}</td>
					<td>{$logs.user}</td>
					<td>{$logs.action}</td>
				</tr>
			{/foreach}
		</table>
	</div>
{/block}