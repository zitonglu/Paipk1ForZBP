<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<nav class="navbar navbar-default navbar-mycolor navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		{if $zbp->Config('paipk1')->ifNavImage == '1'}
			<a class="navbar-brand" href="{$host}" title="{$name}">
				<img class="logo" src="{$host}zb_users/theme/{$theme}/include/logo.png" alt="{$name}的网站LOGO">
			</a>
		{/if}
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">{$name}</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-xs" href="{$host}">{$name}</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="divNavBar">
				{module:navbar}
			</ul>
			<ul class="nav navbar-nav navbar-right hidden-xs">
			{if $zbp->Config('paipk1')->ifNavQRCode == '1'}	
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="点击打开二维码"><i class="glyphicon glyphicon-qrcode"></i> 二维码</a>
				<ul class="dropdown-menu">
					{if $host == "http://www.paipk.com/"}
					<img src="http://images.paipk.com/erweima.png" alt="网页二维码">
					{else}
					<img src="http://api.qrserver.com/v1/create-qr-code/?size=200x200&amp;data={$host}" alt="网页二维码">
					{/if}
				</ul>
				</li>
			{/if}
			{if $zbp->Config('paipk1')->ifNavSearch == '1'}	
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-search"></i> 搜索</a>
				<div class="dropdown-menu search-box">
					<form method="post" action="{$host}zb_system/cmd.php?act=search" name="search">
						<div class="input-group">
							<input type="text" class="form-control" name="q" size="12" placeholder="输入搜索内容">
							<span class="input-group-btn">
						        <button class="btn btn-default" type="submit">Go!</button>
						    </span>
					    </div>
				    </form>
				</div>
				</li>
			{/if}
			{if $zbp->Config('paipk1')->ifNavLogin == '1'}	
			{if $user.ID>0}
				<li class="dropdown">
					<a href="#" title="后台管理"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-pencil"></i> {$zbp.members[$user.ID].StaticName}</a>
					<ul class="dropdown-menu">
						<li><a href="{$host}zb_system/admin/?act=admin" rel="nofollow" title="后台管理">后台管理</a></li>
						<li><a href="{$host}zb_system/cmd.php?act=logout" rel="nofollow" title="登出注销">登出注销</a></li>
					</ul>
			{else}
				<li>
				<a href="{$host}zb_system/cmd.php?act=login" rel="nofollow" title="登录"><i class="glyphicon glyphicon-user"></i> 登录</a>
			{/if}
				</li>
			{/if}		
			</ul>
		</div>
	</div>
</nav>