<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div id="carousel-example-generic" class="post-box carousel slide" data-ride="carousel">
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
		<p>
<span>
	{if $zbp->Config('paipk1')->ifbaiduShare == '1'}
<div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	{else}
	{php}
		$nowtime = '<i class="glyphicon glyphicon-time"></i> '.date("Y-m-d h:i");
		echo $nowtime;
	{/php}
	{/if}
</span>
		<p><a href="{$topText.Url}" title="{$topText.Title}"><i class="glyphicon glyphicon-fire"></i>&nbsp;{$topText.Title}</a></p>
	</div>
{/if}