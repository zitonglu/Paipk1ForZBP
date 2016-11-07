<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{if $article->Metas->paipk1_single_theme_select == "noside"}
	{template:single-noside}
{elseif $article->Metas->paipk1_single_theme_select == "video" and $article->Metas->paipk1_singleVideo != ""}
	{template:single-video}
{else}
{template:header}
<body class="single" id="top">
<!-- 导航 -->
<div class="container-fluid">{template:nav}</div>
{if $article->Metas->paipk1_singleVideo != ""}
<div class="jumbotron videobox long">
	<div class="video">
		{$article->Metas->paipk1_singleVideo}
	</div>
</div>
{else}
<div class="container long">{template:head-row}</div>
{/if}
<div class="container long">
	<div class="row single-body">
		<div class="col-md-9 single-box">
			{if $article.Type==ZC_POST_TYPE_ARTICLE}
			{template:post-single}
			{else}
			{template:post-page}
			{/if}
		</div>
		<div class="col-md-3 single-box hidden-xs hidden-sm">
			<div class="single-right">{template:sidebar3}
			<div class="rightfloat">
				<div id="float">
BLOG启示录-WORDPRESS博客建设与经营》是2010年出版的一本关于wordpress博客方面的书。它的内容非常全面，紧紧围绕wordpress网站建设和运营来写的。但网站的建设和经营本来就是一个非常大的方面，如果对于新手来说，这本书就像本天书，每个地方都要细细研究；对于有一定基础的朋友来说，这里的一些东西是概括性居多，分析和细节方便少的可怜；对于专攻某方面的人来说，这本书只要看四、五分之一就够了
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
{template:footer}
{/if}