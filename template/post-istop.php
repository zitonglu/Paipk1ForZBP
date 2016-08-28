<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{php}
$randABC=rand(1,20);
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
$content = $hotlist->Content;
preg_match_all($pattern,$content,$matchContent);
if($hotlist->Metas->paipk1_teSeTuPian!=""){
	$topbj=$hotlist->Metas->paipk1_teSeTuPian;
}elseif(isset($matchContent[1][0])){
	$topbj=$matchContent[1][0];
}else{
	$topbj=$zbp->host."zb_users/theme/$theme/images/rand/$randABC.jpg";
}
if($PPTNumber==1){
	$styleActive=" active";
	$PPTNumber++;
}else{
	$styleActive="";
}
{/php}
<div class="item{$styleActive}">
	<div class="top-box" style="background-image:url({$topbj})">
		<div class="tim"><a href="{$hotlist.Url}" title="{$hotlist.Title}">{$hotlist.Time('m')}月<br>{$hotlist.Time('d')}</a></div>
		<div class="cat">
			<a href="{$hotlist.Category.Url}">{$hotlist.Category.Name}</a>
		</div>
		<div class="tit">
			<p></p>
			<h3><a href="{$hotlist.Url}" title="{$hotlist.Title}">{$hotlist.Title}</a></h3>
		</div>
	</div>
</div>