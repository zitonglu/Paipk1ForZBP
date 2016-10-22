
<?php  include $this->GetTemplate('header');  ?>
<body id="single-noside">
<!-- 导航 -->
<div class="container-fluid"><?php  include $this->GetTemplate('nav');  ?></div>
<div class="container"><?php  include $this->GetTemplate('head-row');  ?></div>
<div class="container">
	<div class="row single-body single-box">
		<!-- <div class="col-md-9 col-md-offset-125"> -->
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
<?php  include $this->GetTemplate('post-single');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-page');  ?>
<?php } ?>
		<!-- </div> -->
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>