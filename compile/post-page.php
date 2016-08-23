
<div class="single-left">
  <h1><?php  echo $article->Title;  ?></h1>
  <?php if ($article->Alias!="") { ?><p class="Subtitle text-right">——<?php  echo $article->Alias;  ?></p><?php } ?>
  <p class="time">
    <?php  echo $article->Time('Y年m月d日 H:i');  ?>&nbsp;
    <?php  echo $article->Author->StaticName;  ?>
  </p>
  <?php  echo $article->Content;  ?>
</div>

<div class="more-text">
<?php 
$stime = time();
$ytime = 91*24*60*60;
$ztime = $stime-$ytime;
$order = array('log_ViewNums'=>'DESC');
$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
$RMarray = $zbp->GetArticleList(array('*'),$where,$order,array(6),'');
 ?>
<?php  foreach ( $RMarray as $hotlist) { ?>
<?php 
SF_img1::getPics($hotlist,355,230,4);
$src=SF_img1::getPicUrlBy($hotlist->Metas->paipk1_teSeTuPian,355,230,4);
$randABC=rand(1,20);
 ?>
  <div class="col-md-4 col-sm-6">
<?php if ($hotlist->Metas->paipk1_teSeTuPian!="") { ?>
  <div class="more-text-box" style="background-image:url(<?php  echo $src;  ?>)">
<?php }elseif($hotlist->sf_img_count>0) {  ?>
  <div class="more-text-box" style="background-image:url(<?php  echo $hotlist->sf_img[0];  ?>)">
<?php }else{  ?>
  <div class="more-text-box" style="background-image:url(<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/images/rand/<?php  echo $randABC;  ?>.jpg)">
<?php } ?>
      <p class="BMT-title">
        <a href="<?php  echo $hotlist->Url;  ?>" title="<?php  echo $hotlist->Category->Name;  ?>"><?php  echo $hotlist->Category->Name;  ?></a><br><br>近三个月被浏览 <?php  echo $hotlist->ViewNums;  ?>次</p><p class="more-text-title"><a href="<?php  echo $hotlist->Url;  ?>" title="<?php  echo $hotlist->Title;  ?>"><?php  echo $hotlist->Title;  ?></a>
      </p>
    </div>
  </div>
<?php }   ?>
  <div class="clearfix"></div>
</div>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>		
<?php } ?>