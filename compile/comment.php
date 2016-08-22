
<div class="media" id="cmt<?php  echo $comment->ID;  ?>">
  <div class="media-left">
    <a href="#comment" onclick="RevertComment('<?php  echo $comment->ID;  ?>')">
      <img class="media-object" src="<?php  echo $comment->Author->Avatar;  ?>" alt="<?php  echo $comment->Author->Name;  ?>" title="点击头像回复该评论">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php  echo $comment->Author->Name;  ?>&nbsp;<b><?php  echo $comment->Time('Y-m-d');  ?> <span class="glyphicon glyphicon-time"></span>&nbsp;<?php  echo $comment->Time('H:i');  ?></b></h4>
    <p><?php  echo $comment->Content;  ?></p>
    <?php  foreach ( $comment->Comments as $comment) { ?>
      <?php  include $this->GetTemplate('comment');  ?>
    <?php }   ?>
  </div>
</div>