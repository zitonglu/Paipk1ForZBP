<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body id="index-there">
<div class="container">{template:nav}</div>
<div class="container">
	<div class="row single-body">
		<div class="col-md-2 left-list hidden-xs hidden-sm">
			<img class="img-responsive single-body" src="{$host}zb_users/theme/{$theme}/include/logo.png" alt="{$name}的网站LOGO">
			{template:sidebar}
		</div>
		<div class="col-md-7">
{if $zbp->Config('paipk1')->ifPPT=='1'}
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
{if $zbp->Config('paipk1')->topID!=''}
	{$topText=GetPost((int)$zbp->Config('paipk1')->topID);}
		<div class="istop">
			<p><a href="{$topText.Url}" title="{$topText.Title}"><span class="glyphicon glyphicon-fire"></span>{$topText.Title}</a><b class="hidden-xs hidden-sm">{$topText.Time('Y-m-d')}</b></p>
		</div>
{/if}
{/if}
		<div class="list-left">
			<ul class="media-list">
			{foreach $articles as $article}
				{template:post-multi}
			{/foreach}
			</ul>
		</div>
			{template:pagebar}
		</div>
		<div class="col-md-3 there-right-box hidden-xs hidden-sm">
			<div class="single-right">
				{template:sidebar2}
			</div>
		</div>
	</div>
</div>

{template:footer}