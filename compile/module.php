
<div class="widget" id="<?php  echo $module->HtmlID;  ?>">

<?php if ((!$module->IsHideTitle)&&($module->Name)) { ?>
<h5><?php  echo $module->Name;  ?></h5>
<?php }else{  ?><h5 style="display:none;"></h5><?php } ?>

<?php if ($module->Type=='div') { ?>
<div><?php  echo $module->Content;  ?></div>
<?php } ?>

<?php if ($module->Type=='ul') { ?>
<div><ul><?php  echo $module->Content;  ?></ul></div>
<?php } ?>

</div>