			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 animated" style="padding-bottom: 20px" data-animation-type="fadeInDown" data-animation-delay="0">
						{if $_banners.bottom[0].href}
						<a href="{$_banners.bottom[0].href}" target="_blank" rel="nofollow">
							<img class="img-responsive" src="{$_banners.bottom[0].src}" alt="{$_banners.bottom[0].alt}"{if $_banners.bottom[0].width!=0} width="{$_banners.bottom[0].width}"{/if}{if $_banners.bottom[0].height!=0} height="{$_banners.bottom[0].height}"{/if} />
						</a>
						{/if}
					</div>
					<div class="col-sm-6 col-md-6 animated" data-animation-type="fadeInDown" data-animation-delay="0">
						{if $_banners.bottom[1].href}
						<a href="{$_banners.bottom[1].href}" target="_blank" rel="nofollow">
							<img class="img-responsive" src="{$_banners.bottom[1].src}" alt="{$_banners.bottom[1].alt}"{if $_banners.bottom[1].width!=0} width="{$_banners.bottom[1].width}"{/if}{if $_banners.bottom[1].height!=0} height="{$_banners.bottom[1].height}"{/if} />
						</a>
						{/if}
					</div>
				</div>
			</div>