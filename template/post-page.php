<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="single-left">
  <h1>{$article.Title}</h1>
  {if $article->Alias!=""}<p class="Subtitle text-right">——{$article.Alias}</p>{/if}
  <p class="time">
    {$article.Time('Y年m月d日 H:i')}&nbsp;
    {$article.Author.StaticName}
  </p>
  {$article.Content}
</div>

{if !$article.IsLock}
{template:comments}		
{/if}