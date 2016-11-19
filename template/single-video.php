<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body id="top" class="single single-video">
{template:nav}<!-- nav end -->
<article class="container article">
	<div class="col-md-7 video-left">{$article->Metas->paipk1_singleVideo}</div>
	<section class="col-md-5 section video-right">
{if $zbp->Config('paipk1')->ifbaiduShare == '1'}
<div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more hidden-xs" data-cmd="more"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
{/if}
	<div class="tab">
	    <i class="glyphicon glyphicon-time"></i>&nbsp;{$article.Time('Y-m-d H:i')}&nbsp;
	    <i class="glyphicon glyphicon-eye-open"></i>&nbsp;{$article.ViewNums}&nbsp;
	    <i class="glyphicon glyphicon-comment"></i>&nbsp;
	    {if $article.CommNums<=0}
	    <a href="#SOHUCS" title="发表评论">发表评论</a>
	    {else}{$article.CommNums}{/if}&nbsp;
	</div>
	<h1 class="title">{$article.Title}</h1>

	{$article.Content}
	</section>
<div class="clearflx"></div>
<div class="text-center more-btn">
	{if $article.Prev}
	<a class="btn btn-yellowgreen" href="{$article.Prev.Url}" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一篇</a>
	{/if}
	<a class="btn btn-blue" href="#" role="button" data-toggle="modal" data-target="#myshang"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;打赏</a>
	{if $article.Next}
	<a class="btn btn-orange" href="{$article.Next.Url}" role="button">下一篇&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
	{/if}
</div>

{if $article.Type==ZC_POST_TYPE_ARTICLE}
<div class="more-list">
{foreach GetList(4,$article->Category->ID) as $hotlist}
{php}
SF_img1::getPics($hotlist,355,230,4);
$randABC=rand(1,20);
if($hotlist->Metas->paipk1_teSeTuPian!=""){
    $IMGURL=$hotlist->Metas->paipk1_teSeTuPian;
  }elseif($hotlist->sf_img_count>=1){
    $IMGURL=$hotlist->sf_img[0];
  }else{
    $IMGURL=$host.'zb_users/theme/'.$theme.'/images/rand/'.$randABC.'.jpg';
  }
{/php}
<div class="col-md-3 col-sm-6 more-text-box">
  <a href="{$hotlist.Url}" title="{$hotlist.Title}"><img src="{$IMGURL}" alt="{$hotlist.Title}"></a>
  <p class="BMT-title">
    <a href="{$hotlist.Url}" title="{$hotlist.Title}">{$hotlist.Time('Y-m-d')}</a><br><br>该文章被浏览 {$hotlist.ViewNums}次
  </p>
  <p class="more-text-title">
    <a href="{$hotlist.Url}" title="{$hotlist.Title}">{$hotlist.Title}</a>
  </p>
</div>
{/foreach}
  <div class="clearfix"></div>
</div>
{/if}

{if !$article.IsLock}
{template:comments}		
{/if}

{if $zbp->Config('paipk1')->PageAD2!=""}
<div class="hidden-xs hidden-sm singlefooterAD">{$zbp->Config('paipk1')->PageAD2}</div>
{/if}

</article>

{template:footer}