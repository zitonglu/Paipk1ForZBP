<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{php}
	SF_img1::getPics($article,190,120,4);
{/php}
{if $article->Metas->paipk1_single_theme_select == "weiyu"}
<!-- 微语模式 -->
<li class="media weiyu" id="post-{$article.ID}">
	<a class="media-left hidden-xs" href="{$article.Url}">
		<img src="{$article.Author.Avatar}" alt="作者头像">
	</a>
	<div class="media-body">
		<h5 class="media-heading"><a href="{$article.Url}" title="{$article.Title}">{$article.Author.StaticName}</a>：{$article.Title}。</h5>
		<p>
		<i class="glyphicon glyphicon-time"></i>&nbsp;{TimeAgo($article.Time())}&nbsp;
		{if $article.Tags}<i class="glyphicon glyphicon-tags"></i>
		{foreach $article.Tags as $tag}&nbsp;<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}&nbsp;
		{/if}
		<i class="glyphicon glyphicon-comment"></i>&nbsp;<a href="{$article.Url}#SOHUCS" title="{$article.Title}">回复</a>
		</p>
	</div>
</li>
{elseif $article->Metas->paipk1_single_theme_select == "video"}
<!-- 视频模式 -->
<li class="media videolist" id="post-{$article.ID}">
	<h4><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h4>
	<div class="media-body">
		<p class="text-indent">{$article.Intro}</p>
		<h6>
		<i class="glyphicon glyphicon-time"></i>&nbsp;{TimeAgo($article.Time())}&nbsp;
		{if $article.Tags}<i class="glyphicon glyphicon-tags"></i>
		{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}&nbsp;
		{/if}
		<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<a href="{$article.Url}">{$article.ViewNums}</a>
		</h6>
	</div>
	<a class="media-right" href="{$article.Url}" title="{$article.Title}">
		<div class="videodiv">
			<img src="{paipk1_mustIMG($article)}" alt="视频截图" class="videoIMG img-cover">
			<i class="glyphicon glyphicon-facetime-video mask"></i>
		</div>
	</a>
	
</li>
{elseif $article->sf_img_count>=3 && $article->Metas->paipk1_single_theme_select == "threepic"}
<!-- 图片模式 -->
<li class="media threepic" id="post-{$article.ID}">
	<h4><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h4>
		<div class="row">
			<a href="{$article.Url}" title="{$article.Title}" class="col-xs-4"><img src="{$article->sf_img[0]}" alt="{$article.Title}" class="img-cover"></a>
			<a href="{$article.Url}" title="{$article.Title}" class="col-xs-4"><img src="{$article->sf_img[1]}" alt="{$article.Title}" class="img-cover"></a>
			<a href="{$article.Url}" title="{$article.Title}" class="col-xs-4"><img src="{$article->sf_img[2]}" alt="{$article.Title}" class="img-cover"></a>
		</div>
	{$article.Intro}
	<h6>
	<i class="glyphicon glyphicon-time"></i>&nbsp;{TimeAgo($article.Time())}&nbsp;
	{if $article.Tags}<i class="glyphicon glyphicon-tags"></i>
	{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}&nbsp;
	{/if}
	<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<a href="{$article.Url}">{$article.ViewNums}</a>
	</h6>
</li>
{elseif $article->sf_img_count>=1 || $article->Metas->paipk1_teSeTuPian!=''}
<!-- 单图普通模式 -->
<li class="media" id="post-{$article.ID}">
	<h4><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h4>
	<div class="media-left">
		<div class="media-box">
			<a href="{$article.Url}" title="{$article.Title}"><img src="{paipk1_mustIMG($article)}" alt="{$article.Title}" class="img-cover"></a>
			<div class="tim"><a href="{$article.Url}">{$article.Time('M')}<br>{$article.Time('d')}</a>
			</div>
			<div class="cat">
				<a href="{$article.Category.Url}" target="_blank" title="{$article.Category.Name}">{$article.Category.Name}</a>
			</div>
		</div>
	</div>
	<div class="media-body">
		<h6>
		<i class="glyphicon glyphicon-time"></i>&nbsp;{TimeAgo($article.Time())}&nbsp;
		{if $article.Tags}<i class="glyphicon glyphicon-tags"></i>
		{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}&nbsp;
		{/if}
		<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<a href="{$article.Url}">{$article.ViewNums}</a>
		</h6>
		{$article.Intro}
		<p class="clearfix"></p>
	</div>
</li>
{else}
<li class="media">
  <div>
  	<h4><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h4>
	{$article.Intro}
	<h6>
	<i class="glyphicon glyphicon-time"></i>&nbsp;{TimeAgo($article.Time())}&nbsp;
	{if $article.Tags}<i class="glyphicon glyphicon-tags"></i>
	{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a> {/foreach}&nbsp;
	{/if}
	<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<a href="{$article.Url}">{$article.ViewNums}</a>
	</h6>
    <p class="clearfix"></p>
  </div>
</li>
{/if}