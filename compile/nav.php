
<nav class="row navbar navbar-default navbar-mycolor">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only"><?php  echo $name;  ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-xs" href="<?php  echo $host;  ?>"><?php  echo $name;  ?></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="divNavBar">
				<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
			</ul>
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<li><a href="#" data-toggle="modal" data-target="#myshare"><i class="glyphicon glyphicon-qrcode"></i> 二维码</a></li>
			</ul>
		</div>
	</div>
</nav>