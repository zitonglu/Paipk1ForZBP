
<div class="single-left">
  <h1><?php  echo $article->Title;  ?></h1>
  <?php if ($article->Alias!="") { ?><p class="Subtitle text-right">——<?php  echo $article->Alias;  ?></p><?php } ?>
  <p class="time">
    <?php  echo $article->Time('Y年m月d日 H:i');  ?>&nbsp;
    <?php if ($article->Tags) { ?>
    标签：<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>"><?php  echo $tag->Name;  ?></a> <?php }   ?>
    <?php }else{  ?><?php  echo $article->Author->StaticName;  ?>
    <?php } ?>
  </p>
  <?php  echo $article->Content;  ?>

  <?php if ($article->Prev) { ?><p class="next-pre-text pre-text">上一篇：<a href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>"><?php  echo $article->Prev->Title;  ?></a></p><?php } ?>
  <?php if ($article->Next) { ?><p class="next-pre-text next-text">下一篇：<a href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>"><?php  echo $article->Next->Title;  ?></a></p><?php } ?>
</div>

<div class="text-center more-share">
<?php if ($article->Prev) { ?>
  <a class="btn btn-default" href="<?php  echo $article->Prev->Url;  ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一篇</a>
<?php } ?>
  <a class="btn btn-info" href="#" role="button" data-toggle="modal" data-target="#myshang"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;打赏</a>
  <a class="btn btn-info" href="#" role="button" data-toggle="modal" data-target="#myshare"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;文章分享</a>
<?php if ($article->Next) { ?> 
  <a class="btn btn-default" href="<?php  echo $article->Next->Url;  ?>" role="button">下一篇&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
<?php } ?>
</div>

<div class="more-text">
<?php 
$stime = time();
$ytime = 91*24*60*60;
$ztime = $stime-$ytime;
$order = array('log_ViewNums'=>'DESC');
$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
$RMarray = $zbp->GetArticleList(array('*'),$where,$order,array(3),'');
 ?>
<?php  foreach ( $RMarray as $hotlist) { ?>
<?php SF_img1::getPics($hotlist,355,230,4); ?>
<?php $src=SF_img1::getPicUrlBy($hotlist->Metas->paipk1_teSeTuPian,355,230,4) ?>
  <div class="col-md-4 col-sm-6">
<?php if ($hotlist->Metas->paipk1_teSeTuPian!="") { ?>
  <div class="more-text-box" style="background-image:url(<?php  echo $src;  ?>)">
<?php }elseif($hotlist->sf_img_count>0) {  ?>
  <div class="more-text-box" style="background-image:url(<?php  echo $hotlist->sf_img[0];  ?>)">
<?php }else{  ?>
  <div class="more-text-box" style="background-image:url(<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/include/nopic.jpg)">
<?php } ?>
      <p class="BMT-title">
        <a href="<?php  echo $hotlist->Category->Url;  ?>" title="<?php  echo $hotlist->Category->Name;  ?>"><?php  echo $hotlist->Category->Name;  ?></a><br><br>近三个月被浏览 <?php  echo $hotlist->ViewNums;  ?>次</p><p class="more-text-title"><a href="<?php  echo $hotlist->Url;  ?>" title="<?php  echo $hotlist->Title;  ?>"><?php  echo $hotlist->Title;  ?></a>
      </p>
    </div>
  </div>
<?php }   ?>
  <div class="clearfix"></div>
</div>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>		
<?php } ?>