		{$banner = array_shift($data.banners.data)}
		{if $banner.href}
		<figure>
			<a href="_click.php?cid={$banner.href}" target="_blank" rel="nofollow"><img src="{$banner.src}" alt="{$banner.alt}" /></a>
		</figure>
		{/if}