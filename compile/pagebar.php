
<?php if ($pagebar) { ?>
<nav class="text-center">
	<ul class="pagination">
		<?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
		  <?php if ($pagebar->PageNow==$k) { ?>
		<li class="active"><a href="#"><?php  echo $k;  ?></a></li>
		<?php }else{  ?>
		<li><a href="<?php  echo $v;  ?>"><?php  echo $k;  ?></a></li>
		<?php } ?>
		<?php }   ?>
	</ul>
</nav>
<?php } ?>