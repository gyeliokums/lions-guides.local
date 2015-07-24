<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>{block name="head_title"}[head_title]{/block}</title>
{block name="head_meta"}
        [meta tags]
{/block}
{block name="head_css"}[head css]{/block}
</head>

<body class="sticky-header">

<section>
{block name="body_left_menu"}{/block}
{block name="body_right_menu"}
        <div class="menu-right">
                <ul class="notification-menu">
                        <li>
                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <img src="./images/avatar.png" alt="" />
                                        {$data.authorization.full_name}
                                        <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                        <li><a href="?logout"><i class="fa fa-sign-out"></i> Выйти</a></li>
                                </ul>
                        </li>

                </ul>
        </div>
{/block}
{block name="body_main_content"}
        <div class="main-content" >
                <div class="page-heading">
        {block name="body_main_content_page_heading"}
                        Page Tittle goes here
        {/block}
                </div>
                <div class="wrapper">
        {block name="body_main_content_error"}{/block}
        {block name="body_main_content_page_main"}
                        Body contents goes here
        {/block}
                </div>
        {block name="body_footer"}
        {/block}
        </div>
{/block}
</section>
{block name="body_scripts"}
        [body_scripts]
{/block}
{$htmlForm}
</body>
</html>
