<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{$host}zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="{$host}zb_system/script/zblogphp.js" type="text/javascript"></script>
  <script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
{if $zbp->Config('paipk1')->ifOutLink=="1"}
  <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" type="text/css"/>
{else}
  <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/bootstrap.min.css" type="text/css"/>
{/if}
  <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/home.css?v=2.32" type="text/css">
	<meta name="generator" content="{$zblogphp}" />
  <!--首页相关信息-->
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
  <title>{$name}-{$subname}</title>
  <meta name="keywords" content="z-blogPHP,主题,网页设计"/>
  <meta name="description" content="{$name}-{$subname}"/>
<!--百度统计-->
{if $zbp->Config('paipk1')->baiduTJ!=""}{$zbp->Config('paipk1')->baiduTJ}{/if}
<!--[if lt IE 9]>
  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
{$header}
</head>
<body>
<!-- 导航 -->
<nav class="navbar navbar-default navbar-mycolor">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="{$host}">
				<img class="logo" src="{$host}zb_users/theme/{$theme}/include/logo.png" alt="{$name}的网站LOGO">
			</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">{$name}</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="divNavBar">
				{module:navbar}
			</ul>
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-qrcode"></i> 二维码</a>
				<ul class="dropdown-menu">
					<!-- <img src="http://api.qrserver.com/v1/create-qr-code/?size=160x160&amp;data={$host}" alt="网页二维码"> -->
				</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-search"></i> 搜索</a>
				<ul class="dropdown-menu search-box">
					<form method="post" action="{$host}zb_system/cmd.php?act=search" name="search">
						<div class="input-group">
							<input type="text" class="form-control" name="q" size="12" placeholder="输入搜索内容">
							<span class="input-group-btn">
						        <button class="btn btn-default" type="submit">Go!</button>
						    </span>
					    </div>
				    </form>
				</ul>
				</li>	
			</ul>
		</div>
	</div>
</nav>
<div class="shade"></div>
<!-- 导航end -->
<div class="jumbotron">
	<div class="container">
		
	</div>	
</div>

{if $zbp->Config('paipk1')->ifOutLink=="1"}
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
{else}
    <script src='{$host}zb_users/theme/{$theme}/js/bootstrap.min.js'></script>
{/if}
{$footer}
</body>
</html>