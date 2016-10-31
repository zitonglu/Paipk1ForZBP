<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{if $article->Metas->paipk1_single_theme_select == "noside"}
	{template:single-noside}
{else}
{template:header}
<body class="single" id="top">
<!-- 导航 -->
<div class="container-fluid">{template:nav}</div>
<div class="container">{template:head-row}</div>
<div class="container">
	<div class="row single-body">
		<div class="col-md-9 single-box">
			{if $article.Type==ZC_POST_TYPE_ARTICLE}
			{template:post-single}
			{else}
			{template:post-page}
			{/if}
		</div>
		<div class="col-md-3 single-box hidden-xs hidden-sm">
			<div class="single-right">{template:sidebar3}</div>
		</div>
	</div>
</div>

{template:footer}

{/if}