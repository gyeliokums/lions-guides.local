{include file="_consts.tpl" scope="parent"}<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
	<title>{$_page_title}</title>
	<meta charset="utf-8">
	<meta name="keywords" content="{$_page_keywords}" />
	<meta name="description" content="{$_page_description}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/images/favicon.png" />
	{block name="head_css"}{/block}
</head>
<body>
	<div id="page-wrapper">
	{block name="body_page_wrapper"}{/block}
	</div>
	{block name="body_bottom_javascript"}{/block}
</body>
</html>