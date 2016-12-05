<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body class="index index-pic">
{template:nav}<!-- 导航结束 -->
<div class="container article">
{if $zbp->Config('paipk1')->ifPPT=='1'}
<div class="col-md-8 col-sm-12">
	<div id="carousel-example-generic" class="post-box carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
	{php}include $zbp->path.'zb_users/theme/paipk1/plugin/out.html';{/php}
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
{/if}
{foreach $articles as $article}
{php}
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
$content = $article->Content;
preg_match_all($pattern,$content,$matchContent);
{/php}
{if isset($matchContent[1][0]) || $article->Metas->paipk1_teSeTuPian!=''}
<section class="col-md-4 col-sm-6 post-box">
	<a href="{$article.Url}" title="{$article.Title}">
		<img src="{paipk1_mustIMG($article)}" alt="{$article.Title}" class="img-cover">
	</a>
		<div class="tim"><a href="{$article.Url}" title="{$article.Title}">{$article.Time('M')}<br>{$article.Time('d')}</a></div>
		<div class="cat">
			<a href="{$article.Category.Url}" target="_blank" title="{$article.Category.Name}">{$article.Category.Name}</a>
		</div>
		<div class="post-text">
			<h4><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h4>
			<p>{SubStrUTF8(TransferHTML($article.Intro,"[nohtml]"),80)}</p>
		</div>
</section>
{else}
<section class="col-md-4 col-sm-6 post-box post-nopic">
	<div class="post-text">
		<h4><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h4>
		<p>{SubStrUTF8(TransferHTML($article.Intro,"[nohtml]"),80)}</p>
	</div>
</section>
{/if}
{/foreach}
<div class="clearfix"></div>
{template:pagebar}
</div>

{template:footer}