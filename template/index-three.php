<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body class="three">
{template:nav}<!-- 导航结束 -->
<div class="container">
		<aside class="col-md-2 hidden-xs hidden-sm sidebar">
			<a href="{$host}" title="{$name}"><img class="img-responsive" src="{$host}zb_users/theme/{$theme}/include/logo.png" alt="{$name}的网站LOGO"></a>
			<divi class="theiaStickySidebar">{template:sidebar2}</divi>
		</aside>
		<div class="col-md-7 list-body">
		{if $zbp->Config('paipk1')->ifPPT=='1'}
			{template:istop}<!-- 置顶内容结束 -->
		{/if}
		<article class="article">
			<ul class="media-list">
			{foreach $articles as $article}
				{template:post-multi}
			{/foreach}
			</ul>
		</article>
			{template:pagebar}
		</div>
		<aside class="col-md-3 hidden-xs hidden-sm sidebar">
			<div class="single-right theiaStickySidebar"><!-- 侧栏滚动 -->
				{template:sidebar}
			</div>
		</aside>
</div>

{template:footer}