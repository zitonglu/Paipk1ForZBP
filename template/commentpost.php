<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="comment-post" id="SOHUCS">
<h4><span class="glyphicon glyphicon-share-alt"></span>&nbsp;发表评论：</h4>
<form class="form-horizontal" id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}">
<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
{else}
	<div class="form-group">
		<label for="inpName" class="col-sm-2 control-label">评论者(*)</label>
		<div class="col-sm-10">
			<input type="text" name="inpName" id="inpName" placeholder="您的称呼" value="{$user.Name}" tabindex="1" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="inpEmail" class="col-sm-2 control-label">Email(*)</label>
		<div class="col-sm-10">
			<input type="email" name="inpEmail" id="inpEmail" placeholder="@" value="{$user.Email}" tabindex="2" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="inpHomePage" class="col-sm-2 control-label">博客地址</label>
		<div class="col-sm-10">
			<input type="text" name="inpHomePage" id="inpHomePage" placeholder="http://" value="{$user.HomePage}" tabindex="3" class="form-control">
		</div>
	</div>
{/if}
	<div class="form-group">
		<label for="txaArticle" class="col-sm-2 control-label">{if $user.ID>0}{$zbp.members[$user.ID].StaticName}{else}文章评论{/if}(*)</label>
		<div class="col-sm-10">
			<textarea name="txaArticle" id="txaArticle" rows="3" tabindex="5" class="form-control"></textarea>
		</div>
	</div>
	{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<div class="form-group">
		<label for="inpVerify" class="col-sm-2 control-label">验证码(*)</label>
		<div class="col-sm-10">
			<input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="6" />
			<img style="width:{$option['ZC_VERIFYCODE_WIDTH']}px;height:{$option['ZC_VERIFYCODE_HEIGHT']}px;cursor:pointer;" src="{$article.ValidCodeUrl}" alt="" title="" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
		</div>
	</div>
	{/if}
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" name="sumbit" tabindex="7" onclick="return zbp.comment.post()">发表评论</button>
		</div>
	</div>
</form>
</div>