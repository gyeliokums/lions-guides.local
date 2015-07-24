			<div class="container">
				<h3 style="font-size: 1.6667em; line-height: 1.25em;">Статьи о странах</h3>
				<div class="row image-box style2">
					{foreach $data.article_blog.data as $item}
					<div class="col-sms-6 col-sm-6 col-md-6">
						<article class="articlies box">
							<figure class="animated fadeInLeft" data-animation-type="fadeInLeft" data-animation-duration="1" style="animation-duration: 5s; -webkit-animation-duration: 5s; visibility: visible;">
								<a href="/{$item.inner_name}" class="hover-effect" title="{$item.name}"><img class="index-articles-image" src="{$item.image}" alt="{$item.name}" /></a>
							</figure>
							<div class="details">
								<strong class="guides-title-box">{$item.name}</strong>
								<p>{$item.short_description}</p>
								<a href="/{$item.inner_name}" title="{$item.name}" class="button btn-small yellow" style="width: 100%; margin-top: -8px;">Читать</a>
							</div>
						</article>
					</div>
					{/foreach}
				</div>
			</div>