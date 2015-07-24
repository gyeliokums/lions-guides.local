{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Режим {if $data.common.id}редактирования {else}добавления {/if}"объединения государств"</h2>
	</header>
{/block}

{block name="body_main_content_page_main"}
		<div class="panel-body">
			<form class="form-horizontal" role="form" action="?model={$data.common.model}&amp;save&amp;action={$data.common.action}{if $data.common.id}&amp;id={$data.common.id}{/if}" method="post" enctype="multipart/form-data">
{*				<div class="form-group">
					<label for="inner_name" class="col-lg-2 col-sm-2 control-label">Внутреннее имя (URL)</label>
					<div class="col-lg-10">*}
						<input type="hidden" class="form-control" id="inner_name" name="inner_name" placeholder="Внутреннее имя" value="{$data.stateunion.data.inner_name}" />
{*						<p class="help-block">Допускаются цифры, знаки "_"/"-" и буквы английского алфавита.</p>
					</div>
				</div>*}
				<div class="form-group">
					<label for="name" class="col-lg-2 col-sm-2 control-label">Название 'Объединения'</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="Название 'Объединения'" value="{$data.stateunion.data.name}" required disabled />
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel-group " id="accordion3">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseCountries">
										Страны на индексную
									</a>
								</h4>
							</div>
							<div id="collapseCountries" class="panel-collapse {*collapse*}">
								<div class="panel-body">
									<div class="form-group">
										<div class="col-lg-6 col-sm-2">Название</div><div class="col-lg-6">Ссылка (ЧПУ)</div>
										{for $i = 0; $i < 10; $i++}
											<div class="col-lg-6 col-sm-2">
												<input class="form-control" type="text" name="countries[{$i}][name]" value="{$data.stateunion.data.countries[$i].name}" />
											</div>
											<div class="col-lg-6">
												<input class="form-control" type="text" name="countries[{$i}][link]" value="{$data.stateunion.data.countries[$i].link}" />
											</div>
										{/for}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-primary" name="submit" value="save">Сохранить</button>
					<button type="submit" class="btn btn-default" name="submit" value="save|close">Сохранить и закрыть</button>
					<button type="submit" class="btn btn-default" name="submit" form="blank-form" value="close">Закрыть</button>
				</div>
			</form>
			<form id="blank-form" class="form-horizontal" role="form" action="?model={$data.common.model}&amp;parent_id={if $data.common.action == add}{$data.common.parent_id}{else}{$data.stateunion.data.parent_id}{/if}" method="post" enctype="multipart/form-data"></form>
		</div>
{/block}