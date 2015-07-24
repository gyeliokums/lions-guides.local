{extends file="administrator/layout.tpl"}

{block name="body_main_content_page_heading"}
	<header class="panel-heading">
		<h2>Фотогалерея</h2>
	</header>
	<header class="panel-heading custom-tab ">
		<ul class="nav nav-tabs">
			<li class="">
				<a href="?model=lion&amp;parent_id={$data.common.parent_id}">Достопримечательности</a>
			</li>
			<li class="active">
				<a href="?model=cityphotogallery&amp;parent_id={$data.common.parent_id}&amp;for=city">Галлерея</a>
			</li>
{*			<li class="">
				<a href="?model=article&amp;parent_id={$data.common.parent_id}">Статьи</a>
			</li>
			<li class="">
				<a href="#">Кухня</a>
			</li>*}
		</ul>
	</header>

{/block}

{block name="body_main_content_page_main"}
	<div class="panel-body">
		<form enctype="multipart/form-data" id="uploadForm" action="/ajax.php?action=upload&amp;model=country&id={$data.common.parent_id}" method="post">
			<ul id="images" class="my-image-gallery">
				{foreach $data.photogallery.data as $image}
					<li>
						<a href="/uploads/images/stateunion/{$data.position.country}/country/{$data.position.city}/city/{$data.position.cityphotogallery}/cityphotogallery/{$image.name}" target="_blank">
							<img src="/uploads/images/stateunion/{$data.position.country}/country/{$data.position.city}/city/{$data.position.cityphotogallery}/cityphotogallery/{$image.name}" width="150" />
						</a>
						<label><input type="checkbox" name="imageRemove[]" value="{$image.id}" />&nbsp;Удалить</label>
					</li>
				{/foreach}
			</ul>
			<div style="float: left;" id="upload"><span>Выберите файл</span></div><span id="status"></span>
			<div><button class="btn btn-primary btn-sm" formaction="?model=cityphotogallery&amp;for={$data.common.parent_id}&amp;parent_id={$data.common.parent_id}&amp;action=remove&amp;save">Удалить выбраное</button></div>
		</form>
	</div>
{/block}

{block name="head_css" append}

{/block}

{block name="body_scripts" append}
	<script src="js/ajaxupload.3.5.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			var btnUpload=$('#upload');
			var status=$('#status');
			new AjaxUpload(btnUpload, {
				action: 'ajax.php?action=upload&model={$data.common.for}&parent_id={$data.common.parent_id}',
				name: 'uploadfile',
				onSubmit: function(file, ext){
					if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
// extension is not allowed
						status.text('Поддерживаемые форматы JPG, PNG или GIF');
						return false;
					}
					status.text('Загрузка...');
				},
				onComplete: function(file, response){
					status.text('');
					var data = eval('(' + response + ')');
					if(data['error'] === ""){
						$('<li></li>').appendTo('#images').html('' +
						'<a href="/uploads/images/stateunion/{$data.position.country}/country/{$data.position.city}/city/{$data.position.cityphotogallery}/cityphotogallery/' + data['name'] + '" target="_blank">' +
						'	<img src="/uploads/images/stateunion/{$data.position.country}/country/{$data.position.city}/city/{$data.position.cityphotogallery}/cityphotogallery/'+ data['name'] +'" alt="" width="150" />' +
						'</a>' +'' +
						'<label><input type="checkbox" name="imageRemove[]" value="' + data['id'] + '">&nbsp;Удалить</label>').addClass('success');
					} else{
						$('<li></li>').appendTo('#images').text(data['error']).addClass('error');
					}
				}
			});
		});
	</script>
{/block}