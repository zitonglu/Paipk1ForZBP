<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body class="single single-noside">
{template:nav}<!-- nav end -->
<article class="container article">
	{if $article.Type==ZC_POST_TYPE_ARTICLE}
	{template:post-single}
	{else}
	{template:post-page}
	{/if}
</article>
{template:footer}