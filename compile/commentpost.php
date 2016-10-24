
<div class="comment-post" id="SOHUCS">
<h4><span class="glyphicon glyphicon-share-alt"></span>&nbsp;发表评论：</h4>
<form class="form-horizontal" id="frmSumbit" target="_self" method="post" action="<?php  echo $article->CommentPostUrl;  ?>">
<input type="hidden" name="inpId" id="inpId" value="<?php  echo $article->ID;  ?>" />
<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
	<div class="form-group">
		<label for="inpName" class="col-sm-2 control-label">评论者(*)</label>
		<div class="col-sm-10">
			<input type="text" name="inpName" id="inpName" placeholder="您的称呼" value="<?php  echo $user->Name;  ?>" tabindex="1" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="inpEmail" class="col-sm-2 control-label">Email(*)</label>
		<div class="col-sm-10">
			<input type="text" name="inpEmail" id="inpEmail" placeholder="@" value="<?php  echo $user->Email;  ?>" tabindex="2" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="inpHomePage" class="col-sm-2 control-label">博客地址</label>
		<div class="col-sm-10">
			<input type="text" name="inpHomePage" id="inpHomePage" placeholder="http://" value="<?php  echo $user->HomePage;  ?>" tabindex="3" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="txaArticle" class="col-sm-2 control-label">文章评论(*)</label>
		<div class="col-sm-10">
			<textarea name="txaArticle" id="txaArticle" rows="3" tabindex="5" class="form-control"></textarea>
		</div>
	</div>
	<?php if ($option['ZC_COMMENT_VERIFY_ENABLE']) { ?>
	<div class="form-group">
		<label for="inpVerify" class="col-sm-2 control-label">验证码(*)</label>
		<div class="col-sm-10">
			<input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="6" />
			<img style="width:<?php  echo $option['ZC_VERIFYCODE_WIDTH'];  ?>px;height:<?php  echo $option['ZC_VERIFYCODE_HEIGHT'];  ?>px;cursor:pointer;" src="<?php  echo $article->ValidCodeUrl;  ?>" alt="" title="" onclick="javascript:this.src='<?php  echo $article->ValidCodeUrl;  ?>&amp;tm='+Math.random();"/>
		</div>
	</div>
	<?php } ?>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" name="sumbit" tabindex="7" onclick="return VerifyMessage()">发表评论</button>
		</div>
	</div>
</form>
</div>