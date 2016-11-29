<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{if $type=='index' && $zbp->Config('paipk1')->indexbottom != ""}
<div class="jumbotron bottom hidden-xs">
    <div class="container">
        {$zbp->Config('paipk1')->indexbottom}
    </div>
</div>
{/if}
<footer class="footer">
    {if $zbp->Config('paipk1')->CopyrightDescription!=""}<p>{$zbp->Config('paipk1')->CopyrightDescription}</p>{/if}
    <p>
        Copyright © 2016-2017 <a href="{$host}" title="{$name}">{$name}</a>&nbsp;
        {if $user.ID>0}
        <a href="{$host}zb_system/admin/?act=admin" rel="nofollow" title="后台管理"><span class="glyphicon glyphicon-pencil"></span></a>
        {else}
        <a href="{$host}zb_system/cmd.php?act=login" rel="nofollow" title="后台登录"><span class="glyphicon glyphicon-user"></span></a>
        {/if}
        {if $zbp->Config('paipk1')->baike!=""}&nbsp;{$zbp->Config('paipk1')->baike}&nbsp;{/if}
        {$copyright}&nbsp;
        Powered By {$zblogphpabbrhtml}. Theme by <a href="http://www.paipk.com" title="拍拍看科技-专业z-blogPHP主题模版制作" target="_blank" >Paipk.com.</a>
    </p>
    {if $type=='index'&&$page=='1'}
        <br><ul class="list-inline">友情链接：{module:link}</ul>
    {/if}
</footer>
<div class="hidden-xs top hiddened" id="backTop">
    {if $zbp->Config('paipk1')->QQ != ""}
    <a target="_blank" title="QQ联系我" href="http://wpa.qq.com/msgrd?v=3&uin={$zbp->Config('paipk1')->QQ}&site={$host}&menu=yes"><img src="{$host}zb_users/theme/{$theme}/images/qq.png" alt="QQ在线" class="QQstyle"></a><br>
    {/if}
    <a href="#" id="returnTop"><span class="glyphicon glyphicon-chevron-up"></span></a>
</div>
{if $type!='index'}
    <div class="modal fade" id="myshang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">谢谢您的打赏</h4>
          </div>
          <div class="modal-body">
            <img src="{$host}zb_users/theme/{$theme}/include/shang.jpg" class="img-responsive center-block" alt="打赏图片">
            <p class="text-center weixin-share-p">打开微信，点击底部的“发现”，<br>使用“扫一扫”即可将请我喝可乐</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
          </div>
        </div>
      </div>
    </div>
{/if}

{if $zbp->Config('paipk1')->ifOutLink=="1"}
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
{else}
    <script src='{$host}zb_users/theme/{$theme}/js/bootstrap.min.js'></script>
{/if}
    <script src='{$host}zb_users/theme/{$theme}/js/custom.js'></script>
<!-- 滚动侧栏 -->
<script src='{$host}zb_users/theme/{$theme}/js/theia-sticky-sidebar.js'></script>
<script src='{$host}zb_users/theme/{$theme}/js/paipk1.js'></script>
{$footer}
</body>
</html>