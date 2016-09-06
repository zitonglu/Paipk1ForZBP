
<div class="single-left">
  <h1><?php  echo $article->Title;  ?></h1>
  <?php if ($article->Alias!="") { ?><p class="Subtitle text-right">——<?php  echo $article->Alias;  ?></p><?php } ?>
  <p class="time">
    <?php  echo $article->Time('Y年m月d日 H:i');  ?>&nbsp;
    <?php  echo $article->Author->StaticName;  ?>
  </p>
  <?php  echo $article->Content;  ?>
</div>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>		
<?php } ?>