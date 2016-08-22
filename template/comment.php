<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="media" id="cmt{$comment.ID}">
  <div class="media-left">
    <a href="#comment" onclick="RevertComment('{$comment.ID}')">
      <img class="media-object" src="{$comment.Author.Avatar}" alt="{$comment.Author.Name}" title="点击头像回复该评论">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">{$comment.Author.Name}&nbsp;<b>{$comment.Time('Y-m-d')} <span class="glyphicon glyphicon-time"></span>&nbsp;{$comment.Time('H:i')}</b></h4>
    <p>{$comment.Content}</p>
    {foreach $comment.Comments as $comment}
      {template:comment}
    {/foreach}
  </div>
</div>