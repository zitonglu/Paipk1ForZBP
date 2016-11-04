
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php  echo $language;  ?>" lang="<?php  echo $language;  ?>">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?php  echo $host;  ?>zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js" type="text/javascript"></script>
  <script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
<?php if ($zbp->Config('paipk1')->ifOutLink=="1") { ?>
  <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" type="text/css"/>
<?php }else{  ?>
  <link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/bootstrap.min.css" type="text/css"/>
<?php } ?>
 	<link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/style.css?v=2.2" type="text/css">
  <link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/color.css?v=2.2" type="text/css">
  <?php if ($zbp->Config('paipk1')->ifGlaze=='1') { ?>
  <link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/glaze.css" type="text/css">
  <?php } ?>
  <?php if ($zbp->Config('paipk1')->ifbg=='0') { ?>
  <link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/bg.css" type="text/css">
  <?php } ?>
  <?php if ($zbp->Config('paipk1')->iflong=='1') { ?>
  <link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/long.css" type="text/css">
  <?php } ?>
	<meta name="generator" content="<?php  echo $zblogphp;  ?>" />
  <!--首页相关信息-->
<?php if ($type=='index'&&$page=='1') { ?>
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
<?php } ?>
  <!--SEO代码优化-->
  <title><?php  echo $title;  ?></title>
<?php if ($zbp->Config('paipk1')->ifseo=="1") { ?>
	<?php if ($type=='article') { ?>
  <?php 
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
   ?>
  <meta name="keywords" content="<?php  echo $keywords;  ?>"/>
  <meta name="description" content="<?php  echo $description;  ?>"/>
  <meta name="author" content="<?php  echo $article->Author->StaticName;  ?>">
<?php }elseif($type=='page') {  ?>
  <meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>"/>
  <?php 
    $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),140)).'...');
   ?>
  <meta name="description" content="<?php  echo $description;  ?>"/>
  <meta name="author" content="<?php  echo $article->Author->StaticName;  ?>">
<?php }elseif($type=='index') {  ?>
  <meta name="Keywords" content="<?php  echo $name;  ?>,<?php  echo $zbp->Config('paipk1')->HomeKeywords;;  ?>">
  <meta name="description" content="<?php if ($zbp->Config('paipk1')->HomeDescription=="") { ?><?php  echo $subname;  ?><?php }else{  ?><?php  echo $zbp->Config('paipk1')->HomeDescription;  ?><?php } ?>">
  <meta name="author" content="<?php  echo $zbp->members[1]->Name;  ?>">
<?php }else{  ?>
  <meta name="Keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>">
  <meta name="description" content="<?php  echo $title;  ?>_<?php  echo $name;  ?>_当前是第<?php  echo $pagebar->PageNow;  ?>页">
  <meta name="author" content="<?php  echo $zbp->members[1]->Name;  ?>">
<?php } ?>
<?php } ?>
<!--百度统计-->
<?php if ($zbp->Config('paipk1')->baiduTJ!="") { ?><?php  echo $zbp->Config('paipk1')->baiduTJ;  ?><?php } ?>
<!--[if lt IE 9]>
  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php  echo $header;  ?>
</head>