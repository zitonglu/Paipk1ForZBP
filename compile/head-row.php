
<div class="head row">
	<div class="col-sm-4 hidden-xs">
		<a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/include/logo.png" alt="<?php  echo $name;  ?>的网站LOGO" class="singleLogo"></a>
	</div>
	<?php if ($zbp->Config('paipk1')->PageTop=="") { ?>
	<div class="col-sm-5 col-sm-offset-3 col-md-4 col-md-offset-4 search-box hidden-xs">
		<form class="navbar-form navbar-left" role="search" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search" name="search" method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="输入搜索内容" name="q">
			</div>
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
		</form>
	</div>
	<?php }else{  ?>
	<div class="col-md-8 hidden-xs singleAD"><?php  echo $zbp->Config('paipk1')->PageTop;  ?></div>
	<?php } ?>
</div>