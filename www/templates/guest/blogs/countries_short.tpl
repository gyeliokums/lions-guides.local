<div class="container section">
	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#Russia">РОССИЯ</a></h4>
				</div>
				<ul class="check-square features">
					{foreach $data.country_blog.data[0] as $item}
					<li><a href="/{$item.inner_name}">{$item.name}</a></li>
					{/foreach}
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#Europe">ЕВРОПА</a></h4>
				</div>
				<ul class="check-square features">
					{foreach $data.country_blog.data[1] as $item}
					<li><a href="/{$item.inner_name}">{$item.name}</a></li>
					{/foreach}
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#Africa">АФРИКА</a></h4>
				</div>
				<ul class="check-square features">
					{foreach $data.country_blog.data[2] as $item}
					<li><a href="/{$item.inner_name}">{$item.name}</a></li>
					{/foreach}
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#Asia">АЗИЯ</a></h4>
				</div>
				<ul class="check-square features">
					{foreach $data.country_blog.data[3] as $item}
					<li><a href="/{$item.inner_name}">{$item.name}</a></li>
					{/foreach}
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="pricing-table white box">
				<div class="header clearfix">
					<h4 class="box-title"><a href="/countries#America">АМЕРИКА</a></h4>
				</div>
				<ul class="check-square features">
					{foreach $data.country_blog.data[4] as $item}
					<li><a href="/{$item.inner_name}">{$item.name}</a></li>
					{/foreach}
				</ul>
			</div>
		</div>
	</div>
	<a href="/countries/" class="uppercase full-width button btn-large yellow">Показать все страны</a>
</div>