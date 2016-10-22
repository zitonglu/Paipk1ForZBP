
<?php 
    SF_img1::getPics($article,190,120,4);
 ?>
<?php if ($article->sf_img_count>=1 or $article->Metas->paipk1_teSeTuPian!='') { ?>
<li class="media" id="post-<?php  echo $article->ID;  ?>">
	<h4><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a><?php if ($article->Alias!="") { ?><small><?php  echo $article->Alias;  ?></small><?php } ?></h4>
	<div class="media-left">
	<?php 
	if($article->Metas->paipk1_teSeTuPian!=""){
		$bgtURL=$article->Metas->paipk1_teSeTuPian;
	}else{
		$bgtURL=$article->sf_img[0];
	}
	 ?>
	<!-- style="background-image:url(<?php  echo $bgtURL;  ?>)" -->
		<div class="media-box">
			<a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->title;  ?>"><img src="<?php  echo $bgtURL;  ?>" alt="<?php  echo $article->title;  ?>"></a>
			<div class="tim"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Time('M');  ?><br><?php  echo $article->Time('d');  ?></a>
			</div>
			<div class="cat">
				<a href="<?php  echo $article->Category->Url;  ?>" target="_blank" title="<?php  echo $article->Category->Name;  ?>"><?php  echo $article->Category->Name;  ?></a>
			</div>
		</div>
	</div>
	<div class="media-body">
		<h6>
		<?php  echo $article->Time('Y-m-d');  ?>&nbsp;<span class="glyphicon glyphicon-time"></span><?php  echo $article->Time('H:i');  ?>&nbsp;
		<span class="glyphicon glyphicon-tags"></span>
		<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?></a> <?php }   ?>&nbsp;
		<span class="glyphicon glyphicon-eye-open"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->ViewNums;  ?></a></span>
		</h6>
		<?php  echo $article->Intro;  ?>
		<p class="clearfix"></p>
	</div>
</li>
<?php }else{  ?>
<li class="media">
  <div>
  	<h4><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a><?php if ($article->Alias!="") { ?><small><?php  echo $article->Alias;  ?></small><?php } ?></h4>
  	<h6>
  	<?php  echo $article->Time('Y-m-d');  ?>&nbsp;<span class="glyphicon glyphicon-time"></span><?php  echo $article->Time('H:i');  ?>&nbsp;
  	<span class="glyphicon glyphicon-tags"></span>
  	<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?></a> <?php }   ?>&nbsp;
  	<span class="glyphicon glyphicon-eye-open"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->ViewNums;  ?></a></span>
  	</h6>
    <?php  echo $article->Intro;  ?>
    <p class="clearfix"></p>
  </div>
</li>
<?php } ?>
