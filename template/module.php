<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu
        .com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<section class="widget" id="{$module.HtmlID}">

{if (!$module.IsHideTitle)&&($module.Name)}
<div class="modulename"><h5 class="glyphicon glyphicon-{$module.HtmlID}">{$module.Name}</h5></div>
{/if}

{if $module.Type=='div'}
<div>{$module.Content}</div>
{/if}

{if $module.Type=='ul'}
<div><ul>{$module.Content}</ul></div>
{/if}

</section>