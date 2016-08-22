<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
  <script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
{if $zbp->Config('paipk1')->ifOutLink=="1"}
  <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" type="text/css"/>
{else}
  <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/bootstrap.min.css" type="text/css"/>
{/if}
 	<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/style.css?v=1.0" type="text/css">

	<meta name="generator" content="{$zblogphp}" />
  <!--首页相关信息-->
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
  <!--SEO代码优化-->
{if $zbp->Config('paipk1')->ifseo=="1"}
	{if $type=='article'}
  <title>{$title}</title>
  {php}
    $aryTags = array();
    foreach($article->Tags as $key){
      $aryTags[] = $key->Name;
    }
    if(count($aryTags)>0){
     $keywords = implode(',',$aryTags);
     }else{
     $keywords = $name;
     }
    $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),140)).'...');
  {/php}
  <meta name="keywords" content="{$keywords}"/>
  <meta name="description" content="{$description}"/>
  <meta name="author" content="{$article.Author.StaticName}">
{elseif $type=='page'}
  <title>{$title}</title>
  <meta name="keywords" content="{$title},{$name}"/>
  {php}
    $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),140)).'...');
  {/php}
  <meta name="description" content="{$description}"/>
  <meta name="author" content="{$article.Author.StaticName}">
{elseif $type=='index'}
  <title>{$name}{if $page>'1'}_第{$pagebar.PageNow}页{/if}</title>
  <meta name="Keywords" content="{$name},{$zbp->Config('paipk1')->HomeKeywords;}">
  <meta name="description" content="{if $zbp->Config('paipk1')->HomeDescription==""}{$subname}{else}{$zbp->Config('paipk1')->HomeDescription}{/if}">
  <meta name="author" content="{$zbp.members[1].Name}">
{else}
  <title>{$title}_{$name}</title>
  <meta name="Keywords" content="{$title},{$name}">
  <meta name="description" content="{$title}_{$name}_当前是第{$pagebar.PageNow}页">
  <meta name="author" content="{$zbp.members[1].Name}">
{/if}
{/if}
<!--百度统计-->
{if $zbp->Config('paipk1')->baiduTJ!=""}{$zbp->Config('paipk1')->baiduTJ}{/if}

{$header}
</head>