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
{if $host == "http://www.paipk.com/"}
	<script>
		var _hmt = _hmt || [];
		(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?3339ebed2f8c74cf5764123027eb494f";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
		})();
	</script>
{/if}
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
<!-- 内容页面 -->
<article class="container contentbox">

	<section class="col-sm-4">
	<ul class="nav nav-tabs green" role="tablist">
	  <li role="presentation" class="active"><a href="#blog" role="tab" data-toggle="tab">博主信息</a></li>
	  <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">关注范围</a></li>
	  <li class="more"><a href="{$zbp.members[1].HomePage}" title="更多内容"><img src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a></li>
	</ul>

	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane active" id="blog">
		<ul class="media-list">
			<li class="media">
				<a class="media-left" href="{$zbp.members[1].HomePage}">
					{if $host == "http://www.paipk.com/"}
					<img src="http://images.limiwu.com/avatar.jpg" alt="{$zbp.members[1].StaticName}" class="Avatar">
					{else}
					<img src="{$zbp.members[1].Avatar}" alt="{$zbp.members[1].StaticName}" class="Avatar">
					{/if}
				</a>
				<div class="media-body">
					<h4 class="media-heading">{$zbp.members[1].StaticName}</h4>
					<p>{$zbp.members[1].Intro}</p>
				</div>
			</li>
		</ul>
	  </div>
	  <div role="tabpanel" class="tab-pane" id="tags"><ul>{module:tags}</ul></div>
	</div>
	</section>

	<section class="col-sm-4">
	<ul class="nav nav-tabs blue" role="tablist">
	  <li role="presentation" class="active"><a href="#news" role="tab" data-toggle="tab">最近发文</a></li>
	  <li role="presentation"><a href="#hot" role="tab" data-toggle="tab">热门文章</a></li>
	  <li class="more"><a href="{$pagebar.nextbutton}" title="更多内容"><img src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a></li>
	</ul>

	<div class="tab-content">
	  <div role="tabpanel" class="tab-pane active" id="news">
	  	<ul class="homelist">
		{foreach GetList($zbp->option['ZC_DISPLAY_COUNT']) as $related}
		<li><span>{$related.Time('Y-m-d')}</span><a href="{$related.Url}" title="{$related.Title}">{$related.Title}</a></li>
		{/foreach}
		</ul>
	  </div>
	  <div role="tabpanel" class="tab-pane" id="hot">
	  	<ul class="homelist">
	  		{php}
	  		$stime = time();
			$ytime = 91*24*60*60;
			$ztime = $stime-$ytime;
			$order = array('log_ViewNums'=>'DESC');
			$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
			$RMarray = $zbp->GetArticleList(array('*'),$where,$order,array($zbp->option['ZC_DISPLAY_COUNT']),'');
			foreach ($RMarray as $hotlist){
				echo "<li><span>".$hotlist->Time('Y-m-d')."</span><a href=\"".$hotlist->Url."\" title=\"".$hotlist->Title."\">".$hotlist->Title."</a></li>";
			}
	  		{/php}
	  	</ul>
	  </div>
	</div>
	</section>

	<section class="col-sm-4">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#work" role="tab" data-toggle="tab">我的作品</a></li>

{if $zbp->Config('paipk1')->ifbaiduShare == '1'}
<li class="floatright"><!-- 百度分享 -->
<div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</li>
{/if}

	</ul>

	<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="work">
		<div id="carousel-example-generic" class="carousel slide post-box" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				{php}include $zbp->path.'zb_users/theme/paipk1/plugin/out.html'{/php}
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	</div>
	</section>
</article>


{if $zbp->Config('paipk1')->ifOutLink=="1"}
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
{else}
    <script src='{$host}zb_users/theme/{$theme}/js/bootstrap.min.js'></script>
{/if}
{$footer}
</body>
</html>