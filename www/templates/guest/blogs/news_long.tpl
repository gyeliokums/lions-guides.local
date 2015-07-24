		<div class="container section">
			<h3 style="font-size: 1.6667em; line-height: 1.25em;">Новости туризма</h3>
			<div class="image-carousel style2" data-animation="slide" data-item-width="370" data-item-margin="30">
				<ul class="slides image-box style10">
					{foreach $data.news_blog.data as $item}
					<li class="box post">
						<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
							<a href="/{$item.inner_name}" class="hover-effect"><img class="img-responsive index-news-image" src="{$item.image}" alt="{$item.name}" /></a>
							<figcaption class="entry-date">
								<label class="date">{$item.date}</label>
							</figcaption>
						</figure>
						<div class="details">
							<a href="/{$item.inner_name}" class="button btn-small yellow">Далее</a>
							<a href="/{$item.inner_name}"><strong class="guides-title-box">{$item.name}</strong></a>
							<div class="post-meta single-line-meta">
								<p>{$item.short_description}</p>
								<span class="hidden updated">{$item.date}</span>
							</div>
						</div>
					</li>
					{/foreach}
				</ul>
			</div>
		</div>