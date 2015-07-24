{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Сахранение/восстановление системы</h2>
	</header>
{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
	<form class="form-horizontal" role="form" action="?model=custodian&amp;save&amp;submit=save" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="fileName" class="col-lg-2 col-sm-2 control-label">Сохранить в файл</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" id="fileName" name="fileName" placeholder="Имя файла для сохранения" value="{$data.custodian.fileName}" />
			</div>
		</div>
		<hr />
		<div class="form-group">
			<label for="fileList" class="col-lg-2 col-sm-2 control-label">Восстановить из файла</label>
			<div class="col-lg-10">
				<select id="fileList" name="fileList">
					{foreach $data.custodian.fileList as $fileName}
					<option value="{$fileName}">{$fileName}</option>
					{/foreach}
				</select>
			</div>
		</div>
		<div class="col-lg-offset-2 col-lg-10">
			<button type="submit" class="btn btn-primary" name="action" value="backup">Сохранить</button>
			<button type="submit" class="btn btn-default" name="action" value="restore">Восстановить</button>
		</div>
	</form>
	</div>
{/block}