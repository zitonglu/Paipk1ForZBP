<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="single-left">
  <h1>{$article.Title}</h1>
  {if $article->Alias!=""}<p class="Subtitle text-right">——{$article.Alias}</p>{/if}
  <p class="time">
    <i class="glyphicon glyphicon-time"></i>&nbsp;{$article.Time('Y-m-d H:i')}&nbsp;
    <i class="glyphicon glyphicon-folder-open"></i>&nbsp;<a href="{$article.Category.Url}" title="{$article.Category.Name}" target="_blank">{$article.Category.Name}</a>&nbsp;
    {if $article.Tags}
    <i class="glyphicon glyphicon-tags"></i>&nbsp;标签：{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}
    {else}<i class="glyphicon glyphicon-user"></i>&nbsp;{$article.Author.StaticName}
    {/if}
    &nbsp;<i class="glyphicon glyphicon-eye-open"></i>&nbsp;{$article.ViewNums}&nbsp;
    <i class="glyphicon glyphicon-comment"></i>&nbsp;
    {if $article.CommNums<=0}
    <a href="#SOHUCS" title="发表评论">发表评论</a>
    {else}{$article.CommNums}{/if}&nbsp;
    <i class="glyphicon glyphicon-qrcode"></i>&nbsp;<a href="#" role="button" data-toggle="modal" data-target="#myshare">二维码</a>
  </p>
  {$article.Content}

  {if $zbp->Config('paipk1')->PageAD1!=""}
  <div class="center-block singleAD">{$zbp->Config('paipk1')->PageAD1}</div>
  {/if}

  {if $article.Prev}<p class="next-pre-text pre-text">上一篇：<a href="{$article.Prev.Url}" title="{$article.Prev.Title}">{$article.Prev.Title}</a></p>{/if}
  {if $article.Next}<p class="next-pre-text next-text">下一篇：<a href="{$article.Next.Url}" title="{$article.Next.Title}">{$article.Next.Title}</a></p>{/if}
</div>

<div class="text-center more-share">
{if $article.Prev}
  <a class="btn btn-default" href="{$article.Prev.Url}" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一篇</a>
{/if}
  <a class="btn btn-info" href="#" role="button" data-toggle="modal" data-target="#myshang"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;打赏</a>
  <a class="btn btn-info" href="#" role="button" data-toggle="modal" data-target="#myshare"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;文章分享</a>
{if $article.Next} 
  <a class="btn btn-default" href="{$article.Next.Url}" role="button">下一篇&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
{/if}
</div>

<div class="more-text">
{foreach GetList(4,$article->Category->ID) as $hotlist}
{php}
SF_img1::getPics($hotlist,355,230,4);
$randABC=rand(1,20);
{/php}
<div class="col-md-3 col-sm-6 more-text-box">
  <a href="{$hotlist.Url}" title="{$hotlist.Title}">
{if $hotlist.Metas.paipk1_teSeTuPian!=""}
  <img src="{$hotlist.Metas.paipk1_teSeTuPian}" alt="{$hotlist.title}">
{elseif $hotlist->sf_img_count>=1}
  <img src="{$hotlist.sf_img[0]}" alt="{$hotlist.title}">
{else}
  <img src="{$host}zb_users/theme/{$theme}/images/rand/{$randABC}.jpg" alt="{$hotlist.title}">
{/if}
  </a>
  <p class="BMT-title">
    <a href="{$hotlist.Url}" title="{$hotlist.title}">{$hotlist.Time('Y-m-d')}</a><br><br>该文章被浏览 {$hotlist.ViewNums}次
  </p>
  <p class="more-text-title">
    <a href="{$hotlist.Url}" title="{$hotlist.Title}">{$hotlist.Title}</a>
  </p>
</div>
{/foreach}
  <div class="clearfix"></div>
</div>

{if $zbp->Config('paipk1')->PageAD2!=""}
<div class="hidden-xs hidden-sm singleAD">{$zbp->Config('paipk1')->PageAD2}</div>
{/if}

{if !$article.IsLock}
{template:comments}		
{/if}