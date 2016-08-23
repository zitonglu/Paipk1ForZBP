
<?php  include $this->GetTemplate('header');  ?>
<body id="index-there">
<div class="container"><?php  include $this->GetTemplate('nav');  ?></div>
<div class="container">
	<div class="row single-body">
		<div class="col-md-2 left-list hidden-xs hidden-sm">
			<img class="img-responsive" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/include/logo.png" alt="<?php  echo $name;  ?>的网站LOGO">
			<?php  include $this->GetTemplate('sidebar');  ?>
		</div>
		<div class="col-md-7">
<?php if ($type=='index'&&$page=='1'&&) { ?> 
{if}
			<?php  foreach ( $articles as $article) { ?>
			{if $article.IsTop}
			<?php  include $this->GetTemplate('post-istop');  ?>
			<?php }else{  ?>
			<?php  include $this->GetTemplate('post-multi');  ?>
			<?php } ?>
			<?php }   ?>

			<?php  include $this->GetTemplate('pagebar');  ?>
		</div>
		<div class="col-md-3 single-box hidden-xs hidden-sm">
			<div class="single-right">
				<?php  include $this->GetTemplate('sidebar2');  ?>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bottom">
	<div class="container"><div class="row">
		<div class="col-sm-7 bottom-div">
			<p>将这个网站<a href="#" class="bottom-a" role="button" data-toggle="modal" data-target="#myshare">分享</a>给您的朋友吧！</p>
		</div>
		<div class="btn-group col-sm-5 bottom-div">
			<a class="btn btn-default" href="<?php  echo $pagebar->prevbutton;  ?>" title="更早的文章" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一页</a>
			<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myshare"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;微信分享</a>
			<a class="btn btn-default" href="<?php  echo $pagebar->nextbutton;  ?>" title="之后的文章" role="button">下一页&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div></div>
</div>
<?php  include $this->GetTemplate('footer');  ?>