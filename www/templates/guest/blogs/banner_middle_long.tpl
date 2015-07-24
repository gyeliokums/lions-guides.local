		{$banner = array_shift($_banners.middle)}
		{if $banner.href}
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 animated" data-animation-type="fadeInDown" data-animation-delay="0">
					<a href="{$banner.href}" target="_blank" rel="nofollow">
						<img class="img-responsive random-index-banner-1170x160" src="{$banner.src}" alt="{$banner.alt}"{if $banner.width!=0} width="{$banner.width}"{/if}{if $benner.height!=0} height="{$banner.height}"{/if} />
					</a>
				</div>
			</div>
		</div>
		{/if}