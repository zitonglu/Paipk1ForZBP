
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
<?php if ($type=='index'&&$zbp->Config('paipk1')->ifPPT=='1') { ?>
		<div id="carousel-example-generic" class="post-box carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
<?php 
$stime = time();
$ytime = 91*24*60*60;
$ztime = $stime-$ytime;
$order = array('log_ViewNums'=>'DESC');
$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
$RMarray = $zbp->GetArticleList(array('*'),$where,$order,array(4),'');
$PPTNumber = 1;
 ?>
<?php  foreach ( $RMarray as $hotlist) { ?>
	<?php  include $this->GetTemplate('post-istop');  ?>
<?php }   ?>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
<?php if ($zbp->Config('paipk1')->topID!='') { ?>
	<?php  foreach ( GetList(1,null,null,null,null,null,array('is_related'=>$zbp->Config('paipk1')->topID)) as $topText) { ?>
		<div class="istop">
			<p><a href="<?php  echo $topText->Url;  ?>" title="<?php  echo $topText->Title;  ?>"><span class="glyphicon glyphicon-fire"></span><?php  echo $topText->Title;  ?></a><b class="hidden-xs hidden-sm"><?php  echo $topText->Time('Y-m-d');  ?></b></p>
		</div>
	<?php }   ?>
<?php } ?>
<?php } ?>
		<div class="list-left">
			<ul class="media-list">
			<?php  foreach ( $articles as $article) { ?>
				<?php  include $this->GetTemplate('post-multi');  ?>
			<?php }   ?>
			</ul>
		</div>
			<?php  include $this->GetTemplate('pagebar');  ?>
		</div>
		<div class="col-md-3 there-right-box hidden-xs hidden-sm">
			<div class="single-right">
				<?php  include $this->GetTemplate('sidebar2');  ?>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bottom">
	<div class="container"><div class="row">
		<div class="col-sm-7 bottom-div">
			<p>将这个网站<a class="bottom-a" href="#" role="button" data-toggle="modal" data-target="#myshare">分享</a>给您的朋友吧！</p>
		</div>
		<div class="btn-group col-sm-5 bottom-div">
			<a class="btn btn-default" href="<?php  echo $pagebar->prevbutton;  ?>" title="更早的文章" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一页</a>
			<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myshare"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;微信分享</a>
			<a class="btn btn-default" href="<?php  echo $pagebar->nextbutton;  ?>" title="之后的文章" role="button">下一页&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div></div>
</div>
<?php  include $this->GetTemplate('footer');  ?>