
<div class="single-left">
  <h1><?php  echo $article->Title;  ?></h1>
  <?php if ($article->Alias!="") { ?><p class="Subtitle text-right">——<?php  echo $article->Alias;  ?></p><?php } ?>
  <p class="time">
    <i class="glyphicon glyphicon-time"></i>&nbsp;<?php  echo $article->Time('Y-m-d H:i');  ?>&nbsp;
    <i class="glyphicon glyphicon-folder-open"></i>&nbsp;<a href="<?php  echo $article->Category->Url;  ?>" title="<?php  echo $article->Category->Name;  ?>" target="_blank"><?php  echo $article->Category->Name;  ?></a>&nbsp;
    <?php if ($article->Tags) { ?>
    <i class="glyphicon glyphicon-tags"></i>&nbsp;标签：<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?></a> <?php }   ?>
    <?php }else{  ?><i class="glyphicon glyphicon-user"></i>&nbsp;<?php  echo $article->Author->StaticName;  ?>
    <?php } ?>
    &nbsp;<i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php  echo $article->ViewNums;  ?>&nbsp;
    <i class="glyphicon glyphicon-comment"></i>&nbsp;
    <?php if ($article->CommNums<=0) { ?>
    <a href="#SOHUCS" title="发表评论">发表评论</a>
    <?php }else{  ?><?php  echo $article->CommNums;  ?><?php } ?>&nbsp;
    <i class="glyphicon glyphicon-qrcode"></i>&nbsp;<a href="#" role="button" data-toggle="modal" data-target="#myshare">二维码</a>
  </p>
  <?php  echo $article->Content;  ?>

  <?php if ($zbp->Config('paipk1')->PageAD1!="") { ?>
  <div class="center-block singleAD"><?php  echo $zbp->Config('paipk1')->PageAD1;  ?></div>
  <?php } ?>

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
<?php  foreach ( GetList(4,$article->Category->ID) as $hotlist) { ?>
<?php 
SF_img1::getPics($hotlist,355,230,4);
$randABC=rand(1,20);
if($hotlist->Metas->paipk1_teSeTuPian!=""){
    $IMGURL=$hotlist->Metas->paipk1_teSeTuPian;
  }elseif($hotlist->sf_img_count>=1){
    $IMGURL=$hotlist->sf_img[0];
  }else{
    $IMGURL=$host.'zb_users/theme/'.$theme.'/images/rand/'.$randABC.'.jpg';
  }
 ?>
<div class="col-md-3 col-sm-6 more-text-box">
  <a href="<?php  echo $hotlist->Url;  ?>" title="<?php  echo $hotlist->Title;  ?>"><img src="<?php  echo $IMGURL;  ?>" alt="<?php  echo $hotlist->Title;  ?>"></a>
  <p class="BMT-title">
    <a href="<?php  echo $hotlist->Url;  ?>" title="<?php  echo $hotlist->Title;  ?>"><?php  echo $hotlist->Time('Y-m-d');  ?></a><br><br>该文章被浏览 <?php  echo $hotlist->ViewNums;  ?>次
  </p>
  <p class="more-text-title">
    <a href="<?php  echo $hotlist->Url;  ?>" title="<?php  echo $hotlist->Title;  ?>"><?php  echo $hotlist->Title;  ?></a>
  </p>
</div>
<?php }   ?>
  <div class="clearfix"></div>
</div>

<?php if ($zbp->Config('paipk1')->PageAD2!="") { ?>
<div class="hidden-xs hidden-sm singleAD"><?php  echo $zbp->Config('paipk1')->PageAD2;  ?></div>
<?php } ?>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>		
<?php } ?>