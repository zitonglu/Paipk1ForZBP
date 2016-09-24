
<?php 
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
 ?>
<div class="item<?php  echo $styleActive;  ?>">
	<div class="top-box" style="background-image:url(<?php  echo $topbj;  ?>)">
		<div class="tim"><a href="<?php  echo $hotlist->Url;  ?>" title="<?php  echo $hotlist->Title;  ?>"><?php  echo $hotlist->Time('m');  ?>月<br><?php  echo $hotlist->Time('d');  ?></a></div>
		<div class="cat">
			<a href="<?php  echo $hotlist->Category->Url;  ?>"><?php  echo $hotlist->Category->Name;  ?></a>
		</div>
		<div class="tit">
			<p></p>
			<hr>
			<h3><a href="<?php  echo $hotlist->Url;  ?>" title="<?php  echo $hotlist->Title;  ?>"><?php  echo $hotlist->Title;  ?></a></h3>
		</div>
	</div>
</div>