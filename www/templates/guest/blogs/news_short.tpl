<div class="travelo-box contact-box">
	<a href="/{$data.position.country.inner_name}/news/"><strong class="header-news">Новости</strong></a>
	{foreach $data.news_blog.data as $item}
	<div class="details">
		<a href="/{$item.inner_name}" class="box-title news-title-box">{$item.name}<small style="margin-bottom: 4px;">{$item.create_time}</small></a>
		<p class="description">{$item.short_description}</p>
		<span class="clearfix"> <a href="/{$item.inner_name}" class="button yellow full-width uppercase btn-small">Читать</a>
	</div>
	{/foreach}
</div>
