<div class="container">
	<div id="main" class="faqs">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h3 style="font-size: 1.6667em; line-height: 1.25em;">Путешественникам на заметку</h3>
				<div class="toggle-container question-list">
					{$i = 1}
					{foreach $data.shopping_blog.data as $item}
					<div class="panel style1">
						<strong class="guides-title-box panel-title">
							<a data-toggle="collapse" href="#tgg{$i}" class="collapsed">{$item.name}</a>
						</strong>
						<div id="tgg{$i++}" class="panel-collapse collapse" style="padding: 0px 0px 25px 40px;">
							<div class="panel-content">
							
								<div><p>{$item.short_description}</p></div>
								<div><a href="/{$item.inner_name}" title="{$item.name}" class="button btn-small yellow">Читать</a></div>
							
							</div>
							
						</div>
					</div>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>