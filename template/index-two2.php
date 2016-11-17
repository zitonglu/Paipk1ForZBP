<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body  class="index-two" id="top">
{template:nav}<!-- 导航结束 -->
<div class="container">
	<aside class="col-md-3 hidden-xs hidden-sm sidebar">
		<div class="theiaStickySidebar"><!-- 侧栏滚动 -->
		{template:sidebar}
		</div>
	</aside>
	<div class="col-md-9">
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
</div>
{template:footer}