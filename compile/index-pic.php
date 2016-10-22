
<?php  include $this->GetTemplate('header');  ?>
<body id="index-pic">
<div class="container-fluid"><?php  include $this->GetTemplate('nav');  ?></div>
<div class="container body">
<?php if ($zbp->Config('paipk1')->ifPPT=='1') { ?>
<div class="col-md-8 col-sm-12 post-list">
	<div id="carousel-example-generic" class="post-box carousel slide" data-ride="carousel">
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
</div>
<?php } ?>
<?php  foreach ( $articles as $article) { ?>
<?php 
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
$content = $article->Content;
preg_match_all($pattern,$content,$matchContent);
 ?>
<?php if (isset($matchContent[1][0]) or $article->Metas->paipk1_teSeTuPian!='') { ?>
	<?php 
	if($article->Metas->paipk1_teSeTuPian!=""){
		$bgtURL=$article->Metas->paipk1_teSeTuPian;
	}else{
		$bgtURL=$matchContent[1][0];
	}
	 ?>
<div class="col-md-4 col-sm-6 post-list">
	<div class="post-box" style="background-image:url(<?php  echo $bgtURL;  ?>)">
		<div class="tim"><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Time('m');  ?>月<br><?php  echo $article->Time('d');  ?></a></div>
		<div class="cat">
			<a href="<?php  echo $article->Category->Url;  ?>" target="_blank" title="<?php  echo $article->Category->Name;  ?>"><?php  echo $article->Category->Name;  ?></a>
		</div>
		<div class="tit">
			<p><a href="<?php  echo $article->Url;  ?>"><?php  echo SubStrUTF8(TransferHTML($article->Intro,"[nohtml]"),200);  ?></a></p>
			<hr>
			<h3><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a></h3>
		</div>
	</div>
</div>
<?php }else{  ?>
<div class="col-md-4 col-sm-6 post-list">
	<div class="post-box post-nopic">
		<h4><b><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></b></h4>
		<h6>
		<a href="<?php  echo $article->Category->Url;  ?>" target="_blank" title="<?php  echo $article->Category->Name;  ?>"><span class="glyphicon glyphicon-send"></span>&nbsp;<?php  echo $article->Category->Name;  ?></a>&nbsp;
		<span class="glyphicon glyphicon-time"></span>&nbsp;<?php  echo $article->Time('Y-m-d H:i');  ?>
		</h6>
		<div><?php  echo $article->Intro;  ?></div>
	</div>
</div>
<?php } ?>
<?php }   ?>
<div class="clearfix"></div>
<?php  include $this->GetTemplate('pagebar');  ?>
</div>

<?php  include $this->GetTemplate('footer');  ?>