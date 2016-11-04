
<?php  include $this->GetTemplate('header');  ?>
<body id="top">
<div class="container-fluid"><?php  include $this->GetTemplate('nav');  ?></div>
<div class="container long">
	<div class="row single-body">
		<div class="col-md-3 there-right-box hidden-xs hidden-sm">
			<div class="single-right">
				<?php  include $this->GetTemplate('sidebar4');  ?>
			</div>
		</div>
		<div class="col-md-9">
<?php if ($zbp->Config('paipk1')->ifPPT=='1') { ?>
		<div id="carousel-example-generic" class="carousel slide post-box" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
<?php 
if(is_file($zbp->path.'zb_users/theme/paipk1/plugin/out.html')){
	include $zbp->path.'zb_users/theme/paipk1/plugin/out.html';
}else{
$stime = time();
$ytime = 91*24*60*60;
$ztime = $stime-$ytime;
$order = array('log_ViewNums'=>'DESC');
$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
$RMarray = $zbp->GetArticleList(array('*'),$where,$order,array(4),'');
$PPTNumber = 1;
foreach ($RMarray as $hotlist){
	include $this->GetTemplate('post-istop');
	}
}
 ?>
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
		<?php  $topText=GetPost((int)$zbp->Config('paipk1')->topID);;  ?>
		<div class="istop">
			<p><a href="<?php  echo $topText->Url;  ?>" title="<?php  echo $topText->Title;  ?>"><span class="glyphicon glyphicon-fire"></span><?php  echo $topText->Title;  ?></a><b class="hidden-xs hidden-sm"><?php  echo $topText->Time('Y-m-d');  ?></b></p>
		</div>
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
	</div>
</div>

<?php  include $this->GetTemplate('footer');  ?>