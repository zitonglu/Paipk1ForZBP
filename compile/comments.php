
<?php if ($socialcomment) { ?>
<?php  echo $socialcomment;  ?>
<?php }else{  ?>

<!--评论框-->
<?php  include $this->GetTemplate('commentpost');  ?>
<label id="AjaxCommentBegin"></label>
<?php if ($article->CommNums>0) { ?>
<div class="comment-box" id="comment">
	<h4><span class="glyphicon glyphicon-comment"></span>&nbsp;评论列表</h4>
	<div class="comments">
<!--评论输出-->
<?php  foreach ( $comments as $key => $comment) { ?>
<?php  include $this->GetTemplate('comment');  ?>
<?php }   ?>
<!--评论翻页条输出-->
<?php  include $this->GetTemplate('pagebar');  ?>
	</div>
</div>
<?php } ?>
<label id="AjaxCommentEnd"></label>
<?php } ?>