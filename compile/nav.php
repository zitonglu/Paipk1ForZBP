
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only"><?php  echo $name;  ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><?php  echo $name;  ?></a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right" id="divNavBar">
				<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
			</ul>
		</div>
	</div>
</nav>