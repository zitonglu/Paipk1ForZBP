<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{php}
    SF_img1::getPics($article,190,120,4);
{/php}
{if $article->sf_img_count>=1 or $article->Metas->paipk1_teSeTuPian!=''}
<li class="media" id="post-{$article.ID}">
	<h4><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a>{if $article->Alias!=""}<small>{$article->Alias}</small>{/if}</h4>
	<div class="media-left">
	{php}
	if($article->Metas->paipk1_teSeTuPian!=""){
		$bgtURL=$article->Metas->paipk1_teSeTuPian;
	}else{
		$bgtURL=$article->sf_img[0];
	}
	{/php}
		<div class="media-box">
			<a href="{$article.Url}" title="{$article.title}"><img src="{$bgtURL}" alt="{$article.title}"></a>
			<div class="tim"><a href="{$article.Url}">{$article.Time('M')}<br>{$article.Time('d')}</a>
			</div>
			<div class="cat">
				<a href="{$article.Category.Url}" target="_blank" title="{$article.Category.Name}">{$article.Category.Name}</a>
			</div>
		</div>
	</div>
	<div class="media-body">
		<h6>
		{$article.Time('Y-m-d')}&nbsp;<span class="glyphicon glyphicon-time"></span>{$article.Time('H:i')}&nbsp;
		<span class="glyphicon glyphicon-tags"></span>
		{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}&nbsp;
		<span class="glyphicon glyphicon-eye-open"><a href="{$article.Url}">{$article.ViewNums}</a></span>
		</h6>
		{$article.Intro}
		<p class="clearfix"></p>
	</div>
</li>
{else}
<li class="media">
  <div>
  	<h4><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a>{if $article->Alias!=""}<small>{$article->Alias}</small>{/if}</h4>
  	<h6>
  	{$article.Time('Y-m-d')}&nbsp;<span class="glyphicon glyphicon-time"></span>{$article.Time('H:i')}&nbsp;
  	<span class="glyphicon glyphicon-tags"></span>
  	{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}&nbsp;
  	<span class="glyphicon glyphicon-eye-open"><a href="{$article.Url}">{$article.ViewNums}</a></span>
  	</h6>
    {$article.Intro}
    <p class="clearfix"></p>
  </div>
</li>
{/if}
