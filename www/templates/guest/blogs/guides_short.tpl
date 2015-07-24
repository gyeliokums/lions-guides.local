		<div class="global-map-area section parallax" data-stellar-background-ratio="0.5" style="background-position: 50% 4.5px; padding-top: 50px; padding-bottom: 0px;">
			<div class="container">
			<h2 style="color: #fff;">Путеводители</h2>
				<div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
					<ul class="slides image-box hotel listing-style1">
						{foreach $data.guide_blog.data as $item}
						<li>
						<article class="box image-fixed">
							<figure><a href="/{$item.inner_name}" title="{$item.name}" class="hover-effect yellow"><img class="img-responsive" height="160" alt="{$item.name}" src="{$item.image}"></a></figure>
							<div class="details">
								<strong class="guides-title-box">{$item.name}<small></small></strong>
								<p class="description">{$item.short_description}</p>
								<a href="/{$item.inner_name}" title="" class="button btn-small yellow float-bottom" style="width: 240px;">Читать</a>
							</div>
						</article>
						</li>
						{/foreach}
					</ul>
				</div>
			</div>
		</div>