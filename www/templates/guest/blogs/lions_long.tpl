		<div class="section container">
			<h2>Достопримечательности</h2>
			<div class="row image-box style3">
				{foreach $data.lion_blog.data as $item}
				<div class="col-sms-6 col-sm-6 col-md-3">
					<article class="box image-lion-fixed">
						<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
							<a href="/{$item.inner_name}" class="hover-effect"><img class="img-responsive index-lion-image" alt="{$item.name}" src="{$item['image']}" /></a>
						</figure>
						<div class="details text-center">
							<strong class="guides-title-box">{$item.name}</strong>
							<p class="description offers-content">{$item.country_name}</p>
							<a href="/{$item.inner_name}" class="button btn-small yellow" href="cruise-detailed.html" style="width: 240px;">Читать</a>
						</div>
						
					</article>
				</div>
				{/foreach}
			</div>
		</div>