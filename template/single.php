<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{if $article->Metas->paipk1_single_theme_select == "noside" || $article->Metas->paipk1_single_theme_select == "weiyu"}
	{template:single-noside}
{elseif $article->Metas->paipk1_single_theme_select == "video" && $article->Metas->paipk1_singleVideo != ""}
	{template:single-video}
{else}
{template:header}
<body class="single" id="top">
{template:nav}<!-- nav end -->
{if $article->Metas->paipk1_singleVideo != ""}
<div class="jumbotron videobox">
	<div class="video">
		{$article->Metas->paipk1_singleVideo}
	</div>
</div><!-- video end -->
{/if}
<div class="container">
	<article class="col-md-9 article">
		{if $article.Type==ZC_POST_TYPE_ARTICLE}
		{template:post-single}
		{else}
		{template:post-page}
		{/if}
	</article>
	<div class="col-md-3 single-box hidden-xs hidden-sm sidebar">
		<aside class="single-right theiaStickySidebar"><!-- 侧栏滚动 -->
			{template:sidebar3}
		</aside>
	</div>
</div>
{template:footer}
{/if}