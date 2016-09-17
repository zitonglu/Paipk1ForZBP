
<?php  include $this->GetTemplate('header');  ?>
<body id="single">
<!-- 导航 -->
<div class="container">
	<?php  include $this->GetTemplate('nav');  ?>
	<?php  include $this->GetTemplate('head-row');  ?>
</div>

<div class="container hidden-xs single-nav">
	<ol class="breadcrumb"><li><a href="<?php  echo $host;  ?>">主页</a></li>
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
	<li><a href="<?php  echo $article->Category->Url;  ?>" title="<?php  echo $article->Category->Name;  ?>" target="_blank"><?php  echo $article->Category->Name;  ?></a></li>
    <li class="active">正文</li>
<?php } ?>
	</ol>
</div>

<div class="container">
	<div class="row single-body">
		<div class="col-md-9 single-box">
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
<?php  include $this->GetTemplate('post-single');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-page');  ?>
<?php } ?>
		</div>
		<div class="col-md-3 single-box hidden-xs hidden-sm">
			<div class="single-right"><?php  include $this->GetTemplate('sidebar3');  ?></div>
		</div>
	</div>
</div>
<div class="container-fluid bottom">
	<div class="container"><div class="row">
		<div class="col-sm-7 bottom-div">
			<p>将这个网站<a class="bottom-a" href="#" role="button" data-toggle="modal" data-target="#myshare">分享</a>给您的朋友吧！</p>
		</div>
		<div class="btn-group col-sm-5 bottom-div">
			<a class="btn btn-default" href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一篇</a>
			<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myshare"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;微信分享</a>
			<a class="btn btn-default" href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>" role="button">下一篇&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div></div>
</div>
<?php  include $this->GetTemplate('footer');  ?>