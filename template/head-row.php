<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="head row">
	<div class="col-sm-4 hidden-xs">
		<a href="{$host}" title="{$name}"><img src="{$host}zb_users/theme/{$theme}/include/logo.png" alt="{$name}的网站LOGO" class="singleLogo"></a>
	</div>
	{if $zbp->Config('paipk1')->PageTop==""}
	<div class="col-sm-5 col-sm-offset-3 col-md-4 col-md-offset-4 search-box hidden-xs">
		<form class="navbar-form navbar-left" role="search" action="{$host}zb_system/cmd.php?act=search" name="search" method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="输入搜索内容" name="q">
			</div>
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
		</form>
	</div>
	{else}
	<div class="col-md-8 hidden-xs singleTopAD">{$zbp->Config('paipk1')->PageTop}</div>
	{/if}
</div>