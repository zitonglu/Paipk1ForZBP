<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{if $socialcomment}
{$socialcomment}
{else}

<!--评论框-->
{template:commentpost}
<label id="AjaxCommentBegin"></label>
{if $article.CommNums>0}
<div class="comment-box" id="comment">
	<h4><span class="glyphicon glyphicon-comment"></span>&nbsp;评论列表</h4>
	<div class="comments">
<!--评论输出-->
{foreach $comments as $key => $comment}
{template:comment}
{/foreach}
<!--评论翻页条输出-->
{template:pagebar}
	</div>
</div>
{/if}
<label id="AjaxCommentEnd"></label>
{/if}