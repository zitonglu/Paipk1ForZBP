
<?php if ($article->Metas->paipk1_single_theme_select == "noside") { ?>
	<?php  include $this->GetTemplate('single-noside');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="single" id="top">
<!-- 导航 -->
<div class="container-fluid"><?php  include $this->GetTemplate('nav');  ?></div>
<div class="container"><?php  include $this->GetTemplate('head-row');  ?></div>
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

<?php  include $this->GetTemplate('footer');  ?>

<?php } ?>