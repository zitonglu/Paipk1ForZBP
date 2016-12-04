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
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/style.css?v=3.2" type="text/css">
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/astro.css?v=1" type="text/css">
  <!--首页相关信息-->
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
  <title>{$name}-{$subname}</title>
  <meta name="keywords" content="{$zbp->Config('paipk1')->HomeKeywords;}"/>
  <meta name="description" content="{if $zbp->Config('paipk1')->HomeDescription==""}{$subname}{else}{$zbp->Config('paipk1')->HomeDescription}{/if}"/>
<!--百度统计-->
{if $zbp->Config('paipk1')->baiduTJ!=""}{$zbp->Config('paipk1')->baiduTJ}{/if}
<!--[if lt IE 9]>
  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
{$header}
</head>
<body id="astro" class="index">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="{$host}" title="{$name}">
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
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="点击打开二维码"><i class="glyphicon glyphicon-qrcode"></i> 二维码</a>
				<ul class="dropdown-menu">
					{if $host == "http://www.paipk.com/"}
					<img src="http://images.paipk.com/erweima.png" alt="网页二维码">
					{else}
					<img src="http://api.qrserver.com/v1/create-qr-code/?size=200x200&amp;data={$host}" alt="网页二维码">
					{/if}
				</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="点击搜索"><i class="glyphicon glyphicon-search"></i> 搜索</a>
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
<!-- nav end -->
<div class="jumbotron">
	<div class="container">
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
</div><!-- jumbotron end -->
<div class="container" id="first">
	<div class="col-md-8 first-cate">
	<ul class="list-inline float-right first-cate-nav">
		<li><a href="">子目录</a></li>
		<li><a href="">子目录</a></li>
		<li><a href="">子目录</a></li>
		<li><a href="" title="更多内容"><img class="more" src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a></li>
	</ul>
	<h4 class="cateName"><i class="glyphicon glyphicon-fire"></i>&nbsp;分类名称</h4>
	<div class="col-sm-6">
		<h5><i class=" glyphicon glyphicon-pencil"></i>&nbsp;推荐文章列表</h5>
		<section class="media">
			<div class="media-left">
				<div class="media-box topIMG-box">
				<a href="" title=""><img src="http://n.sinaimg.cn/news/transform/20161204/8QWr-fxyipxf7514865.jpg" alt="." class="img-cover"></a>
				</div>
			</div>
			<div class="media-body">
				<h4 class="toptitle"><a href="">文章的标题之外,总2:投资之之外,总2:投资之</a></h4>
				<p class="text-indent">唐荐书汇总唐荐书汇总唐荐书汇总唐荐书汇总唐荐书汇总唐荐书汇总唐荐书汇总唐荐书汇总</p>
			</div>
		</section>
		<ul class="toplist">
			<li><i class="glyphicon glyphicon-star-empty"></i>&nbsp;<a href="">老唐荐书汇汇总2:投资之外,总2:投资之外,老</a></li>
			<li><i class="glyphicon glyphicon-star-empty"></i>&nbsp;<a href="">老唐荐书汇汇总2:投资之外,总2:投资之外,老</a></li>
			<li><i class="glyphicon glyphicon-star-empty"></i>&nbsp;<a href="">老唐荐书汇总2:投资之外,汇总2:投资之外,汇总2:投资之外,汇总2:投资之外,汇总2:投资之外,</a></li>
			<li><i class="glyphicon glyphicon-star-empty"></i>&nbsp;<a href="">老唐荐书汇总2:投资汇总2:投资之外,汇总2:投资之外,之外,老</a></li>
			<li><i class="glyphicon glyphicon-star-empty"></i>&nbsp;<a href="">老唐荐书汇总2:投资汇总2:投资之外,v之外,老</a></li>
			<li><i class="glyphicon glyphicon-star-empty"></i>&nbsp;<a href="">老唐荐书汇总2:投资汇总2:投资之外,汇总2:投资之外,之外,老</a></li>
		</ul>
	</div>
	<div class="col-sm-6 newlistbox">
		<h5><i class="glyphicon glyphicon-star"></i>&nbsp;最新文章</h5>
		<ul class="newlist">
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:汇总2:投资汇总2:投资汇总2:投资汇总2:投资,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
			<li><span class="float-right time">2016-12-05</span><a href="">老唐荐书汇总2:投资之外,老</a></li>
		</ul>
	</div>
	<div class="claerfix"></div>
	</div>
	<div class="col-md-4">
		<a href=""><img src="http://www.paipk.com/zb_users/theme/paipk1/screenshot.png" alt="" class="thumbnail img-cover rightimg"></a>
		<a href=""><img src="http://static.aipiaxi.com/Css/Img/wxqr.png" alt="" class="thumbnail img-cover rightimg"></a>
	</div>
	<div class="claerfix"></div>
</div><!-- first-cate -->
<div class="container" id="second">
	<div class="col-md-8">
<div class="col-sm-12">
	<a href="" title="更多内容" class="float-right"><img class="more" src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a>
	<h4 class="cateName"><i class="glyphicon glyphicon-heart"></i>&nbsp;分类名称</h4>
	<div class="col-md-3 second-cate">
		<a href=""><img src="http://static.aipiaxi.com/Css/Img/wxqr.png" alt=".." class="thumbnail img-cover"></a>
		<a href="" class="secondtitle">文章标题三度空间手动功</a>
	</div>
	<div class="col-md-3 second-cate">
		<a href=""><img src="http://www.paipk.com/zb_users/theme/paipk1/screenshot.png" alt=".." class="thumbnail img-cover"></a>
		<a href="" class="secondtitle">三度空间手三度空间手三度空间手三度空间手</a>
	</div>
	<div class="col-md-3 second-cate">
		<a href=""><img src="http://www.paipk.com/zb_users/theme/paipk1/screenshot.png" alt=".." class="thumbnail img-cover"></a>
		<a href="" class="secondtitle">三度空间手三度空间手三度空间手三空间手</a>
	</div>
	<div class="clearflx"></div>
</div><!-- four pic -->
<div class="col-sm-12">
	<a href="" title="更多内容" class="float-right"><img class="more" src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a>
	<h4 class="cateName"><i class="glyphicon glyphicon-user"></i>&nbsp;热门作者</h4>
	<a href=""><img class="col-sm-6 col-md-2 avatar-img" src="{$host}zb_users/theme/{$theme}/images/avatar/1.jpg" alt=""></a>
	<a href=""><img class="col-sm-6 col-md-2 avatar-img" src="{$host}zb_users/theme/{$theme}/images/avatar/2.jpg" alt=""></a>
	<a href=""><img class="col-sm-6 col-md-2 avatar-img" src="{$host}zb_users/theme/{$theme}/images/avatar/3.jpg" alt=""></a>
	<a href=""><img class="col-sm-6 col-md-2 avatar-img" src="{$host}zb_users/theme/{$theme}/images/avatar/4.jpg" alt=""></a>
	<a href=""><img class="col-sm-6 col-md-2 avatar-img" src="{$host}zb_users/theme/{$theme}/images/avatar/5.jpg" alt=""></a>
	<a href=""><img class="col-sm-6 col-md-2 avatar-img" src="{$host}zb_users/theme/{$theme}/images/avatar/6.jpg" alt=""></a>
</div>
	</div>
	<div class="col-md-4">
		<h4 class="cateName"><i class="glyphicon glyphicon-fire"></i>&nbsp;本月热门</h4>
		<ol class="hot-list">
			<li><span class="float-right">三度空</span><a href="">三度空间手三度空间</a></li>
			<li><span class="float-right">三度空</span><a href="">三度空间手空间手三度空空间手三度空空间手三度空三度空间</a></li>
			<li><span class="float-right">三度空</span><a href="">三度空间手三度空间</a></li>
			<li><span class="float-right">三度空</span><a href="">三度空间手三度空间</a></li>
			<li><span class="float-right">三度空</span><a href="">三度空间手三度空间</a></li>
			<li><span class="float-right">三度空</span><a href="">三度空间手三度空间</a></li>
			<li><span class="float-right">三度空</span><a href="">三度空间手三度空间</a></li>
			<li><span class="float-right">三度空</span><a href="">三度空间手三度空间</a></li>
			<li><span class="float-right">三度空</span><a href="">度空间手度空间手度空间间手度间手度手度空间手</a></li>
			<li><span class="float-right">三度空</span><a href="">三度空间手三度空间</a></li>
		</ol>
	</div>
<div class="claerfix"></div>
</div><!-- second-cate -->
<div class="container" id="three">
	<a href="" title="更多内容" class="float-right"><img class="more" src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a>
	<h4 class="cateName"><i class="glyphicon glyphicon-picture"></i>&nbsp;分类目录</h4>
	<div class="col-md-4">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/8.jpg" alt="" class="thumbnail img-cover bottom-left-img">
	</div>
	<div class="col-md-8">
		<section class="col-sm-3 bottom-img">
		<a href="">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/9.jpg" alt="" class="img-cover">
		<p>sgsd摄氏度三打哈额斯蒂芬森</p>
		</a>
		</section>
		<section class="col-sm-3 bottom-img">
		<a href="">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/10.jpg" alt="" class="img-cover">
		<p>sgsd摄氏度三打哈额斯蒂芬森</p>
		</a>
		</section>
		<section class="col-sm-3 bottom-img">
		<a href="">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/8.jpg" alt="" class="img-cover">
		<p>sgsd摄氏度三打哈额斯蒂芬森</p>
		</a>
		</section>
		<section class="col-sm-3 bottom-img">
		<a href="">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/15.jpg" alt="" class="img-cover">
		<p>sgsd摄氏度三打哈额斯蒂芬森</p>
		</a>
		</section>
		<section class="col-sm-3 bottom-img">
		<a href="">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/16.jpg" alt="" class="img-cover">
		<p>sgsd摄氏度三打哈额斯蒂芬森</p>
		</a>
		</section>
		<section class="col-sm-3 bottom-img">
		<a href="">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/19.jpg" alt="" class="img-cover">
		<p>sgsd摄氏度三打哈额斯蒂芬森</p>
		</a>
		</section>
		<section class="col-sm-3 bottom-img">
		<a href="">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/17.jpg" alt="" class="img-cover">
		<p>sgsd摄氏度三打哈额斯蒂芬森</p>
		</a>
		</section>
		<section class="col-sm-3 bottom-img">
		<a href="">
		<img src="{$host}zb_users/theme/{$theme}/images/rand/18.jpg" alt="" class="img-cover">
		<p>sgsd摄氏度三打哈额斯蒂芬森</p>
		</a>
		</section>
		<div class="clearfix"></div>
	</div>
</div><!-- three-cate -->
{template:footer}