<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="single-left">
  <h1>{$article.Title}</h1>
  {if $article->Alias!=""}<p class="Subtitle text-right">——{$article.Alias}</p>{/if}
  <p class="time">
    {$article.Time('Y年m月d日 H:i')}&nbsp;
    {$article.Author.StaticName}
  </p>
  {$article.Content}
</div>

<div class="more-text">
{php}
$stime = time();
$ytime = 91*24*60*60;
$ztime = $stime-$ytime;
$order = array('log_ViewNums'=>'DESC');
$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
$RMarray = $zbp->GetArticleList(array('*'),$where,$order,array(6),'');
{/php}
{foreach $RMarray as $hotlist}
{php}
SF_img1::getPics($hotlist,355,230,4);
$src=SF_img1::getPicUrlBy($hotlist->Metas->paipk1_teSeTuPian,355,230,4);
$randABC=rand(1,20);
{/php}
  <div class="col-md-4 col-sm-6">
{if $hotlist.Metas.paipk1_teSeTuPian!=""}
  <div class="more-text-box" style="background-image:url({$src})">
{elseif $hotlist->sf_img_count>0}
  <div class="more-text-box" style="background-image:url({$hotlist.sf_img[0]})">
{else}
  <div class="more-text-box" style="background-image:url({$host}zb_users/theme/{$theme}/images/rand/{$randABC}.jpg)">
{/if}
      <p class="BMT-title">
        <a href="{$hotlist.Url}" title="{$hotlist.Category.Name}">{$hotlist.Category.Name}</a><br><br>近三个月被浏览 {$hotlist.ViewNums}次</p><p class="more-text-title"><a href="{$hotlist.Url}" title="{$hotlist.Title}">{$hotlist.Title}</a>
      </p>
    </div>
  </div>
{/foreach}
  <div class="clearfix"></div>
</div>

{if !$article.IsLock}
{template:comments}		
{/if}