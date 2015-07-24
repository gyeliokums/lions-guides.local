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
				<input type="hidden" name="parent_id" value="{$data.banner.data.parent_id}" />
			{/if}
			<div class="form-group">
				<label for="company_name" class="col-lg-2 col-sm-2 control-label">Рекламодатель</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="company_name" name="company_name" placeholder="Рекламодатель" value="{$data.banner.data.company_name}" required />
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel-group " id="accordion">
					<div class="panel">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#contacts">
									Контакты
								</a>
							</h4>
						</div>
						<div id="contacts" class="panel-collapse collapse">
							<div class="form-group">
								<label for="title" class="col-lg-2 col-sm-2 control-label">ФИО отвественного лица</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="title" name="contact_fio" placeholder="ФИО отвественного лица" value="{$data.banner.data.contact_fio}" />
								</div>
							</div>
							<div class="form-group">
								<label for="contact_phone" class="col-lg-2 col-sm-2 control-label">Телефон</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Контактный телефон" value="{$data.banner.data.contact_phone}" />
								</div>
							</div>
							<div class="form-group">
								<label for="contact_email" class="col-lg-2 col-sm-2 control-label">Почта</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Почта" value="{$data.banner.data.contact_email}" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="expiration_date" class="col-lg-2 col-sm-2 control-label">Срок годности</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="expiration_date" name="expiration_date" placeholder="Срок давности" value="{$data.banner.data.expiration_date}" required />
				</div>
			</div>
			<div class="form-group">
				<label for="href" class="col-lg-2 col-sm-2 control-label">Ссылка</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="href" name="href" placeholder="http://source.example.org/some/address" value="{$data.banner.data.href}" required />
				</div>
			</div>
			<div class="form-group">
				<label for="alt_text" class="col-lg-2 col-sm-2 control-label">Альтернативный текст</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="alt_text" name="alt_text" placeholder="Альтернативный текст" value="{$data.banner.data.alt_text}" required />
				</div>
			</div>
			<div class="form-group">
				<label for="image" class="col-lg-2 col-sm-2 control-label">Источник изображения</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="image" name="image" placeholder="http://source.example.org/images/name.extesion" value="{$data.banner.data.image}" required />
				</div>
			</div>
			{*{if $data.banner.data.image}
			<div class="form-group">
				<label class="col-lg-2 col-sm-2 control-label">Изображение</label>
				<div class="col-lg-10">
					<ul class="my-image-gallery">
						<li>
							<a href="/uploads/images/stateunion/{$data.position.country}/country/{$data.position.city}/banners/{$data.banner.data.image}" target="_blank">
								<img src="/uploads/images/stateunion/{$data.position.country}/country/{$data.position.city}/banners/{$data.banner.data.image}" width="150" />
							</a>
							<label><input type="checkbox" name="removeImage" value="{$data.banner.data.image}" class="delImg" /> Удалить</label>
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
			{/if}*}
			<div class="form-group">
				<label for="show_count" class="col-lg-2 col-sm-2 control-label">Количество показов</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="show_count" name="show_count" value="{$data.banner.data.show_count}" disabled />
				</div>
			</div>
			<div class="form-group">
				<label for="click_count" class="col-lg-2 col-sm-2 control-label">Количество кликов</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="click_count" name="click_count" value="{$data.banner.data.click_count}" disabled />
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-primary" name="submit" value="save">Сохранить</button>
					<button type="submit" class="btn btn-default" name="submit" value="save|close">Сохранить и закрыть</button>
					<button type="submit" class="btn btn-default" name="submit" form="blank-form" value="close">Закрыть</button>
				</div>
		</form>
		<form id="blank-form" class="form-horizontal" role="form" action="?model={$data.common.model}&amp;parent_id={if $data.common.action == add}{$data.common.parent_id}{else}{$data.banner.data.parent_id}{/if}{if $data.common.referrer}&amp;referrer={$data.common.referrer}{/if}" method="post" enctype="multipart/form-data"></form>
	</div>
{/block}
