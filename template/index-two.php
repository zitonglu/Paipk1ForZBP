<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body id="top" class="index-two">
<div class="container-fluid">{template:nav}</div>
<div class="container long">
	<div class="row single-body">
		<div class="col-md-9">
{if $zbp->Config('paipk1')->ifPPT=='1'}
		<div id="carousel-example-generic" class="carousel slide post-box" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
{php}
if(is_file($zbp->path.'zb_users/theme/paipk1/plugin/out.html')){
	include $zbp->path.'zb_users/theme/paipk1/plugin/out.html';
}else{
$stime = time();
$ytime = 91*24*60*60;
$ztime = $stime-$ytime;
$order = array('log_ViewNums'=>'DESC');
$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
$RMarray = $zbp->GetArticleList(array('*'),$where,$order,array(4),'');
$PPTNumber = 1;
foreach ($RMarray as $hotlist){
	include $this->GetTemplate('post-istop');
	}
}
{/php}
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
		<div class="col-md-3 there-right-box hidden-xs hidden-sm sidebar">
			<div class="single-right theiaStickySidebar"><!-- 侧栏滚动 -->
				{template:sidebar4}
			</div>
		</div>
	</div>
</div>

{template:footer}