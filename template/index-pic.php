<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body id="index-pic">
<div class="container">{template:nav}</div>
<div class="container body">
{if $zbp->Config('paipk1')->ifPPT=='1'}
<div class="col-md-8 col-sm-12 post-list">
	<div id="carousel-example-generic" class="post-box carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
{php}
$stime = time();
$ytime = 91*24*60*60;
$ztime = $stime-$ytime;
$order = array('log_ViewNums'=>'DESC');
$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
$RMarray = $zbp->GetArticleList(array('*'),$where,$order,array(4),'');
$PPTNumber = 1;
{/php}
{foreach $RMarray as $hotlist}
{template:post-istop}
{/foreach}
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
{if isset($matchContent[1][0]) or $article->Metas->paipk1_teSeTuPian!=''}
	{php}
	if($article->Metas->paipk1_teSeTuPian!=""){
		$bgtURL=$article->Metas->paipk1_teSeTuPian;
	}else{
		$bgtURL=$matchContent[1][0];
	}
	{/php}
<div class="col-md-4 col-sm-6 post-list">
	<div class="post-box" style="background-image:url({$bgtURL})">
		<div class="tim"><a href="{$article.Url}" title="{$article.Title}">{$article.Time('m')}月<br>{$article.Time('d')}</a></div>
		<div class="cat">
			<a href="{$article.Category.Url}" target="_blank" title="{$article.Category.Name}">{$article.Category.Name}</a>
		</div>
		<div class="tit">
			<p><a href="{$article.Url}">{SubStrUTF8(TransferHTML($article.Intro,"[nohtml]"),200)}</a></p>
			<hr>
			<h3><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h3>
		</div>
	</div>
</div>
{else}
<div class="col-md-4 col-sm-6 post-list">
	<div class="post-box post-nopic">
		<h4><b><a href="{$article.Url}">{$article.Title}</a></b></h4>
		<h6>
		<a href="{$article.Category.Url}" target="_blank" title="{$article.Category.Name}"><span class="glyphicon glyphicon-send"></span>&nbsp;{$article.Category.Name}</a>&nbsp;
		<span class="glyphicon glyphicon-time"></span>&nbsp;{$article.Time('Y-m-d H:i')}
		</h6>
		<div>{$article.Intro}</div>
	</div>
</div>
{/if}
{/foreach}
<div class="clearfix"></div>
{template:pagebar}
</div>

{template:footer}