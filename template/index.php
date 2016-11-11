<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{php}
$indexHomeURL = $host.'zb_users/theme/'.$theme.'/template/'.$zbp->Config('paipk1')->indexHome .'.php';
$fileExists = @file_get_contents($indexHomeURL,null,null,-1,1) ? true : false;

if($zbp->Config('paipk1')->indexHome!=''&&$type=='index'&&$page=='1'){
	if($fileExists){
		include $this->GetTemplate($zbp->Config('paipk1')->indexHome);
	}else{
		echo '<center><h1>主题设置错误</h1><br><h3>'.$indexHomeURL.'不存在；</h3></center>';
	}
}else{
	if ($zbp->Config('paipk1')->indexTheme!="") {
	include $this->GetTemplate('index-'.$zbp->Config('paipk1')->indexTheme);
	}else{
	include $this->GetTemplate('index-two');
	}
}
{/php}