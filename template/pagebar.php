<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{if $pagebar}
{if $zbp->Config('paipk1')->ifScroll == '1'}
	<div id="navigation"><a href="{$host}/?page=2"></a></div><!-- 无限翻页流 -->
{else}
<nav class="text-center">
	<ul class="pagination">
		{foreach $pagebar.buttons as $k=>$v}
		  {if $pagebar.PageNow==$k}
		<li class="active"><a href="#">{$k}</a></li>
		{else}
		<li><a href="{$v}">{$k}</a></li>
		{/if}
		{/foreach}
	</ul>
</nav>
{/if}

{/if}