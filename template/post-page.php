<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<section class="section">
  <h2 class="title">{$article.Title}</h2>

  {if $article->Alias!=""}<p class="Subtitle text-right">——{$article.Alias}</p>{/if}

{if $zbp->Config('paipk1')->ifbaiduShare == '1'}
<div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
{/if}

<div class="tab">
    <i class="glyphicon glyphicon-time"></i>&nbsp;{$article.Time('Y-m-d H:i')}<span class="hidden-xs">&nbsp;
    <i class="glyphicon glyphicon-eye-open"></i>&nbsp;{$article.ViewNums}&nbsp;
    <i class="glyphicon glyphicon-comment"></i>&nbsp;
    {if $article.CommNums<=0}
    <a href="#SOHUCS" title="发表评论">发表评论</a>
    {else}{$article.CommNums}{/if}</span>
</div>

  {$article.Content}
</section><!-- single content end -->

<div class="author-box">
  <div class="col-sm-8">
    <a href="{$article.Author.HomePage}" title="文章作者：{$article.Author.StaticName}" target="_blank"><img src="{$article.Author.Avatar}" alt="作者头像" class="avatar"></a>
    <h4>作者：<a href="{$article.Author.HomePage}" title="文章作者：{$article.Author.StaticName}" target="_blank">{$article.Author.StaticName}</a></h4>
    <p>{$article.Author.Intro}</p>
  </div>
{if $zbp->Config('paipk1')->PageAD1!=""}
  <div class="col-sm-4 singlebottomAD">
    {$zbp->Config('paipk1')->PageAD1}
  </div>
{/if}
  <div class="clearfix"></div>
</div><!-- author and AD button end -->

{if !$article.IsLock}
{template:comments}		
{/if}

{if $zbp->Config('paipk1')->PageAD2!=""}
  <div class="hidden-xs hidden-sm singlefooterAD">{$zbp->Config('paipk1')->PageAD2}</div>
{/if}