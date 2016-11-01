
<?php SF_img1::getPics($article,190,120,4); ?>
<?php if ($article->Metas->paipk1_single_theme_select == "weiyu") { ?>
<li class="media weiyu" id="post-<?php  echo $article->ID;  ?>">
	<a class="media-left hidden-xs" href="<?php  echo $article->Url;  ?>">
		<img src="<?php  echo $article->Author->Avatar;  ?>" alt="作者头像">
	</a>
	<div class="media-body">
		<h5 class="media-heading"><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Author->StaticName;  ?></a>：<?php  echo $article->Title;  ?>。</h5>
		<p>
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php  echo TimeAgo($article->Time());  ?>&nbsp;
		<?php if ($article->Tags) { ?><i class="glyphicon glyphicon-tags"></i>
		<?php  foreach ( $article->Tags as $tag) { ?>&nbsp;<a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?></a> <?php }   ?>&nbsp;
		<?php } ?>
		<i class="glyphicon glyphicon-comment"></i>&nbsp;<a href="<?php  echo $article->Url;  ?>#SOHUCS" title="<?php  echo $article->Title;  ?>">回复</a>
		</p>
	</div>
</li>
<?php }elseif($article->sf_img_count>=1 || $article->Metas->paipk1_teSeTuPian!='') {  ?>
<li class="media" id="post-<?php  echo $article->ID;  ?>">
	<h4><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a></h4>
	<div class="media-left">
	<?php 
	if($article->Metas->paipk1_teSeTuPian!=""){
		$bgtURL=$article->Metas->paipk1_teSeTuPian;
	}else{
		$bgtURL=$article->sf_img[0];
	}
	 ?>
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
		<i class="glyphicon glyphicon-time"></i>&nbsp;<?php  echo TimeAgo($article->Time());  ?>&nbsp;
		<?php if ($article->Tags) { ?><i class="glyphicon glyphicon-tags"></i>
		<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?></a> <?php }   ?>&nbsp;
		<?php } ?>
		<i class="glyphicon glyphicon-eye-open"></i><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->ViewNums;  ?></a>
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
	<i class="glyphicon glyphicon-time"></i><?php  echo TimeAgo($article->Time());  ?>&nbsp;
	<?php if ($article->Tags) { ?><i class="glyphicon glyphicon-tags"></i>
	<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?></a> <?php }   ?>&nbsp;
	<?php } ?>
	<i class="glyphicon glyphicon-eye-open"></i><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->ViewNums;  ?></a>
	</h6>
    <?php  echo $article->Intro;  ?>
    <p class="clearfix"></p>
  </div>
</li>
<?php } ?>