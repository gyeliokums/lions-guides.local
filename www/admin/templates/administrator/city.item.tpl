{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Режим {if $data.common.id}редактирования {else}добавления {/if}города</h2>
	</header>
{/block}
{block name="body_main_content_page_main"}
	<div class="panel-body">
		<form class="form-horizontal" role="form" action="?model={$data.common.model}&amp;save&amp;action={$data.common.action}{if $data.common.id}&amp;id={$data.common.id}{/if}" method="post" enctype="multipart/form-data">
			{if $data.common.action == 'add'}
			<input type="hidden" name="parent_id" value="{$data.common.parent_id}" />
			{else}
			<input type="hidden" name="parent_id" value="{$data.city.data.parent_id}" />
			{/if}
			<div class="form-group">
				<label for="inner_name" class="col-lg-2 col-sm-2 control-label">Внутреннее имя (URL)</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="inner_name" name="inner_name" placeholder="Внутреннее имя" value="{$data.city.data.inner_name}" required />
					<p class="help-block">Допускаются цифры, знаки "_"/"-" и буквы английского алфавита.</p>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel-group " id="accordion">
					<div class="panel">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSEO">
									SEO
								</a>
							</h4>
						</div>
						<div id="collapseSEO" class="panel-collapse collapse">
							<div class="form-group">
								<label for="title" class="col-lg-2 col-sm-2 control-label">Заголовок страницы (title)</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="title" name="title" placeholder="Заголовок страницы (title)" value="{$data.city.data.title}" />
								</div>
							</div>
							<div class="form-group">
								<label for="keywords" class="col-lg-2 col-sm-2 control-label">Ключевые слова (keywords)</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="keywords" name="keywords" placeholder="Ключевые слова (keywords)" value="{$data.city.data.keywords}" />
								</div>
							</div>
							<div class="form-group">
								<label for="meta_description" class="col-lg-2 col-sm-2 control-label">Описание страницы (meta description)</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Описание страницы (meta description)" value="{$data.city.data.meta_description}" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-lg-2 col-sm-2 control-label">Название города</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="name" name="name" placeholder="Название города" value="{$data.city.data.name}" required />
				</div>
			</div>
			<div class="form-group">
				<label for="short_description" class="col-lg-2 col-sm-2 control-label">Короткое описание</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="short_description" name="short_description" placeholder="Короткое описание" value="{$data.city.data.short_description}" required />
				</div>
			</div>
			{if $data.city.data.image}
			<div class="form-group">
				<label class="col-lg-2 col-sm-2 control-label">Изображение</label>
				<div class="col-lg-10">
					<ul class="my-image-gallery">
						<li>
							<a href="/uploads/images/stateunion/{$data.position.country}/country/{$data.position.city}/city/{$data.common.id}/{$data.city.data.image}" target="_blank">
								<img src="/uploads/images/stateunion/{$data.position.country}/country/{$data.position.city}/city/{$data.common.id}/{$data.city.data.image}" width="150" />
							</a>
							<label><input type="checkbox" name="removeImage" value="{$data.city.data.image}" class="delImg" /> Удалить</label>
						</li>
					</ul>
				</div>
			</div>
			{else}
			<div class="form-group">
				<label class="col-lg-2 col-sm-2 control-label">Загрузить изображение</label>
				<div class="col-lg-10">
					<input type="file" name="image[]" accept="images/*" class="btn-lg" />
				</div>
			</div>
			{/if}
			<div class="form-group">
				<label for="description" class="col-lg-2 col-sm-2 control-label">Описание</label>
				<div class="col-lg-10">
					<textarea class="form-control" id="description" name="description" placeholder="Основной текст" rows="19">{$data.city.data.description}</textarea>
				</div>
				<div class="form-group">
					<label for="search_words" class="col-lg-2 col-sm-2 control-label">Слова для поиска</label>
					<div class="col-lg-10">
						<textarea class="form-control" id="search_words" name="search_words" placeholder="Слова для поиска" rows="10">{$data.article.data.search_words}</textarea>
					</div>
				</div>
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-primary" name="submit" value="save">Сохранить</button>
					<button type="submit" class="btn btn-default" name="submit" value="save|close">Сохранить и закрыть</button>
					<button type="submit" class="btn btn-default" name="submit" form="blank-form" value="close">Закрыть</button>
				</div>
		</form>
		<form id="blank-form" class="form-horizontal" role="form" action="?model={$data.common.model}&amp;parent_id={if $data.common.action == add}{$data.common.parent_id}{else}{$data.city.data.parent_id}{/if}" method="post" enctype="multipart/form-data"></form>
	</div>
{/block}
