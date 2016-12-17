<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();
?>
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
{if $zbp->Config('paipk1')->themeColor != 'blue' && $zbp->Config('paipk1')->themeColor != ''}
  <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/color-{$zbp->Config('paipk1')->themeColor}.css?v=3.3" type="text/css">
{/if}
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
{if $zbp->Config('paipk1')->ActivationCode == 'sdd194c8234nb'}
{template:nav}<!-- nav end -->
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
	<div class="col-md-8 col-sm-12 first-cate">
	<ul class="list-inline float-right first-cate-nav">
{foreach $categorys[$zbp->Config('paipk1')->AstroFirstID].SubCategorys as $subCategory }
	<li class="hidden-xs"><a href="{$subCategory.Url}">{if $subCategory.Level ==2} &nbsp;└{/if}{$subCategory.Name}</a></li>
{/foreach}
		<li><a href="{$categorys[$zbp->Config('paipk1')->AstroFirstID].Url}" title="{$categorys[$zbp->Config('paipk1')->AstroFirstID].Name}分类的更多内容"><img class="more" src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a></li>
	</ul>
	<h4 class="cateName"><i class="glyphicon glyphicon-globe"></i>&nbsp;{$categorys[$zbp->Config('paipk1')->AstroFirstID].Name}</h4>
	<div class="col-sm-6">
		<h5><i class=" glyphicon glyphicon-pencil"></i>&nbsp;推荐文章列表</h5>
		<section class="media">
			<div class="media-left">
				<div class="media-box topIMG-box">
{if $zbp->Config('paipk1')->topID!=''}
{php}
$topText = GetPost((int)$zbp->Config('paipk1')->topID);
$topTextIntro = SubStrUTF8(TransferHTML($topText->Intro,"[nohtml]"),40);
{/php}
				<a href="{$topText.Url}" title="{$topText.Title}"><img src="{paipk1_mustIMG($topText,'avatar')}" alt="{$topText.Title}" class="img-cover"></a>
				</div>
			</div>
			<div class="media-body">
				<h4 class="toptitle"><a href="{$topText.Url}" title="{$topText.Title}">{$topText.Title}</a></h4>
				<p class="text-indent">{$topTextIntro}</p>
{/if}
			</div>
		</section>
		<ul class="toplist">
{$toplists = GetList(6,null,null,null,null,null,array("only_ontop" => true))}
{foreach $toplists as $toplist}
	<li><i class="glyphicon glyphicon-star-empty"></i>&nbsp;<a href="{$toplist.Url}" title="{$toplist.Title}">{$toplist.Title}</a></li>
{/foreach}
		</ul>
	</div>
	<div class="col-sm-6 newlistbox">
		<h5><i class="glyphicon glyphicon-star"></i>&nbsp;最新文章</h5>
		<ul class="newlist">
{$newLists = GetList(10)}
{foreach $newLists as $newList}
	<li><span class="float-right time">{$newList.Time('Y-m-d')}</span><a href="{$newList.Url}" title="{$newList.Title}">{$newList.Title}</a></li>
{/foreach}
		</ul>
	</div>
	</div>
	<div class="col-md-4 col-sm-12">
{$newLists = paipk1_TcgetList(2,null,null,null,null,null,null,'rand')}
{foreach $newLists as $newList}
	<a href="{$newList.Url}" title="{$newList.Title}" class="col-md-12 col-sm-6"><img src="{paipk1_mustIMG($newList)}" alt="{$newList.Title}" class="thumbnail img-cover rightimg"></a>
{/foreach}
	</div>
</div><!-- first-cate -->
<div class="container" id="second">
	<div class="col-md-8 col-sm-12">
<div class="col-sm-12">
<ul class="list-inline float-right first-cate-nav">
{foreach $categorys[$zbp->Config('paipk1')->AstroSecondID].SubCategorys as $subCategory }
	<li class="hidden-xs"><a href="{$subCategory.Url}">{if $subCategory.Level ==2} &nbsp;└{/if}{$subCategory.Name}</a></li>
{/foreach}
	<li><a href="{$categorys[$zbp->Config('paipk1')->AstroSecondID].Url}" title="{$categorys[$zbp->Config('paipk1')->AstroSecondID].Name}分类的更多内容"><img class="more" src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a></li>
</ul>
	<h4 class="cateName"><i class="glyphicon glyphicon-heart"></i>&nbsp;{$categorys[$zbp->Config('paipk1')->AstroSecondID].Name}</h4>
{$SecondLists = GetList(4,$zbp->Config('paipk1')->AstroSecondID,null,null,null,null,array("has_subcate"=>true))}
{foreach $SecondLists as $SecondList}
	<div class="col-md-3 col-sm-6 second-cate">
		<a href="{$SecondList.Url}" title="{$SecondList.Title}"><img src="{paipk1_mustIMG($SecondList)}" alt=".." class="thumbnail img-cover"></a>
		<a href="{$SecondList.Url}" title="{$SecondList.Title}" class="secondtitle">{$SecondList.Title}</a>
	</div>
{/foreach}
</div><!-- four pic -->
<div class="col-sm-12">
	<h4 class="cateName"><i class="glyphicon glyphicon-comment"></i>&nbsp;热评文章</h4>
	{php}
	$paipk1TcgetList = paipk1_TcgetList(6,null,null,null,null,null,null,'comm');
	$paipk1TcgetListRand = rand (1,15);
	{/php}
	{foreach $paipk1TcgetList as $paipk1comm}
	{php}
		$comIMG = $host."zb_users/theme/".$theme."/images/avatar/".$paipk1TcgetListRand.".jpg";
		$paipk1TcgetListRand ++;
	{/php}
	<a href="{$paipk1comm.Url}" title="{$paipk1comm.Title}"><img class="col-sm-3 col-md-2 avatar-img" src="{$comIMG}" alt="{$paipk1comm.Title}"></a>
	{/foreach}
	<div class="clearfix"></div>
</div>
	</div>
	<div class="col-md-4 col-sm-12">
		<h4 class="cateName"><i class="glyphicon glyphicon-fire"></i>&nbsp;热门文章</h4>
		<ol class="hot-list">
{$RMarrayList = paipk1_TcgetList(10,null,null,null,null,null,null,'hot')}
{foreach $RMarrayList as $RMarray}
	<li><span class="float-right">{TimeAgo($RMarray.Time())}</span><a href="{$RMarray.Url}" title="{$RMarray.Title}">{$RMarray.Title}</a></li>
{/foreach}
		</ol>
	</div>
</div><!-- second-cate -->
<div class="container" id="four">
	<ul class="list-inline float-right first-cate-nav">
{foreach $categorys[$zbp->Config('paipk1')->AstroFourID].SubCategorys as $subCategory }
		<li class="hidden-xs"><a href="{$subCategory.Url}">{if $subCategory.Level ==2} &nbsp;└{/if}{$subCategory.Name}</a></li>
{/foreach}
		<li><a href="{$categorys[$zbp->Config('paipk1')->AstroFourID].Url}" title="{$categorys[$zbp->Config('paipk1')->AstroFourID].Name}分类的更多内容"><img class="more" src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a></li>
	</ul>
	<h4 class="cateName"><i class="glyphicon glyphicon-headphones"></i>&nbsp;{$categorys[$zbp->Config('paipk1')->AstroFourID].Name}</h4>
{$fourLists = GetList(4,$zbp->Config('paipk1')->AstroFourID,null,null,null,null,array("has_subcate"=>true))}
{foreach $fourLists as $fourList}
	<section class="col-md-3 col-sm-6">
		<a href="{$fourList.Url}" title="{$fourList.Title}">
			<img src="{paipk1_mustIMG($fourList)}" alt="" class="thumbnail img-cover">
			<p class="fourListP"><span class="float-right"><i class="glyphicon glyphicon-expand"></i>&nbsp;{$fourList.ViewNums}次</span><i class="glyphicon glyphicon-time"></i>&nbsp;{TimeAgo($fourList.Time())}<br><b>{$fourList.Title}</b></p>
		</a>
	</section>
{/foreach}
</div><!-- four-cate -->
<div class="container" id="three">
<ul class="list-inline float-right first-cate-nav">
{foreach $categorys[$zbp->Config('paipk1')->AstroThreeID].SubCategorys as $subCategory }
	<li class="hidden-xs"><a href="{$subCategory.Url}">{if $subCategory.Level ==2} &nbsp;└{/if}{$subCategory.Name}</a></li>
{/foreach}
	<li><a href="{$categorys[$zbp->Config('paipk1')->AstroThreeID].Url}" title="{$categorys[$zbp->Config('paipk1')->AstroThreeID].Name}分类的更多内容"><img class="more" src="{$host}zb_users/theme/{$theme}/images/more.jpg" alt="more"></a></li>
</ul>
	<h4 class="cateName"><i class="glyphicon glyphicon-picture"></i>&nbsp;{$categorys[$zbp->Config('paipk1')->AstroThreeID].Name}</h4>
	<div class="col-md-4">
		<img src="{$host}zb_users/theme/{$theme}/include/cellnumber.png" alt="图片" class="thumbnail img-cover bottom-left-img">
	</div>
	<div class="col-md-8">
{$threeLists = GetList(8,$zbp->Config('paipk1')->AstroThreeID,null,null,null,null,array("has_subcate"=>true))}
{foreach $threeLists as $threeList}
	<section class="col-sm-3 bottom-img">
		<a href="{$threeList.Url}" title="{$threeList.Title}">
			<img src="{paipk1_mustIMG($threeList)}" alt="{$threeList.Title}" class="img-cover">
			<p>{$threeList.Title}</p>
		</a>
	</section>
{/foreach}
		<div class="clearfix"></div>
	</div>
</div><!-- three-cate -->
{/if}
{template:footer}