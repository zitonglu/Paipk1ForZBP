
<div class="single-left">
  <h1><?php  echo $article->Title;  ?></h1>
  <?php if ($article->Alias!="") { ?><p class="Subtitle text-right">——<?php  echo $article->Alias;  ?></p><?php } ?>
  <p class="time">
    <i class="glyphicon glyphicon-time"></i>&nbsp;<?php  echo $article->Time('Y-m-d H:i');  ?>&nbsp;
    <i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php  echo $article->ViewNums;  ?>&nbsp;
    <i class="glyphicon glyphicon-comment"></i>&nbsp;
    <?php if ($article->CommNums<=0) { ?>
    <a href="#SOHUCS" title="发表评论">发表评论</a>
    <?php }else{  ?><?php  echo $article->CommNums;  ?><?php } ?>&nbsp;
    <i class="glyphicon glyphicon-qrcode"></i>&nbsp;<a href="#" role="button" data-toggle="modal" data-target="#myshare">二维码</a>
  </p>
  <?php  echo $article->Content;  ?>
</div>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>		
<?php } ?>