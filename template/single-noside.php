<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body id="single-noside">
<!-- 导航 -->
<div class="container">
	{template:nav}
	<div class="head row">
		<div class="col-sm-4 hidden-xs">
			<img src="{$host}zb_users/theme/{$theme}/include/logo.png" alt="{$name}的网站LOGO" class="singleLogo">
		</div>
		{if $zbp->Config('paipk1')->PageTop==""}
		<div class="col-sm-5 col-sm-offset-3 col-md-4 col-md-offset-4 search-box hidden-xs">
			<form class="navbar-form navbar-left" role="search" action="{$host}zb_system/cmd.php?act=search" name="search" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="输入搜索内容" name="q">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
		{else}
		<div class="col-md-8 hidden-xs singleTopAD">{$zbp->Config('paipk1')->PageTop}</div>
		{/if}
	</div>
</div>

<div class="container">
	<div class="row single-body single-box">
		<!-- <div class="col-md-9 col-md-offset-125"> -->
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}
		<!-- </div> -->
	</div>
</div>
<div class="container-fluid bottom">
	<div class="container"><div class="row">
		<div class="col-sm-7 bottom-div">
			<p>将这个网站<a class="bottom-a" href="#" role="button" data-toggle="modal" data-target="#myshare">分享</a>给您的朋友吧！</p>
		</div>
		<div class="btn-group col-sm-5 bottom-div">
			<a class="btn btn-default" href="{$article.Prev.Url}" title="{$article.Prev.Title}" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一篇</a>
			<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myshare"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;微信分享</a>
			<a class="btn btn-default" href="{$article.Next.Url}" title="{$article.Next.Title}" role="button">下一篇&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div></div>
</div>
{template:footer}