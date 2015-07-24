<div class="travelo-box contact-box">
	<a href="/{$data.position.country.inner_name}/articles/"><strong class="header-news">Статьи</strong></a>
	{foreach $data.article_blog.data as $item}
	<div class="details">
		<a href="/{$item.inner_name}" class="box-title news-title-box">{$item.name}</a>
		<p class="description">{$item.short_description}</p>
		<span class="clearfix"> <a href="/{$item.inner_name}/" class="button green full-width uppercase btn-small">Читать</a>
	</div>
	{/foreach}
</div>