<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="widget" id="{$module.HtmlID}">

{if (!$module.IsHideTitle)&&($module.Name)}
<h5>{$module.Name}</h5>
{else}<h5 style="display:none;"></h5>{/if}

{if $module.Type=='div'}
<div>{$module.Content}</div>
{/if}

{if $module.Type=='ul'}
<div><ul>{$module.Content}</ul></div>
{/if}

</div>