<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="container-fluid bottom">
    <div class="container"><div class="row">
        <div class="col-sm-7 bottom-div">
            <p>将这个网站<a class="bottom-a" href="#" role="button" data-toggle="modal" data-target="#myshare">分享</a>给您的朋友吧！</p>
        </div>
        <div class="btn-group col-sm-5 bottom-div">
            <a class="btn btn-default" href="{$article.Prev.Url}" title="{$article.Prev.Title}" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一篇</a>
            <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myshare"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;微信分享</a>
            <a class="btn btn-default" href="{$article.Next.Url}" title="{$article.Next.Title}" role="button">下一篇&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div></div>
</div>
<div class="container-fluid footer">
    {if $zbp->Config('paipk1')->CopyrightDescription!=""}<p>{$zbp->Config('paipk1')->CopyrightDescription}</p>{/if}
    <p>
        Copyright © 2016-2017 <a href="{$hose}" title="{$name}">{$name}</a>&nbsp;
        {if $user.ID>0}
        <a href="{$host}zb_system/admin/?act=admin" rel="nofollow" title="后台管理"><span class="glyphicon glyphicon-pencil"></span></a>
        {else}
        <a href="{$host}zb_system/cmd.php?act=login" rel="nofollow" title="后台登录"><span class="glyphicon glyphicon-user"></span></a>
        {/if}
        {if $zbp->Config('paipk1')->baike!=""}&nbsp;{$zbp->Config('paipk1')->baike}&nbsp;{/if}
        {$copyright}&nbsp;
        Powered By {$zblogphpabbrhtml}. Theme by <a href="http://www.paipk.com" title="拍拍看科技-专业z-blogPHP主题模版制作" target="_blank" >Paipk.com.</a>
    </p>
</div>
<div class="hidden-xs top"><a href="#top"><span class="glyphicon glyphicon-chevron-up"></span></a></div>
<div class="modal fade" id="myshare" tabindex="-1" role="dialog" aria-labelledby="myshare">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="mythinks">谢谢您的分享</h4>
            </div>
            <div class="modal-body">
                <img src="http://api.qrserver.com/v1/create-qr-code/?size=256x256&amp;data={$article.Url}" class="img-responsive center-block" alt="文章网址的二维码">
                <p class="text-center weixin-share-p">打开微信，点击底部的“发现”，<br>使用“扫一扫”即可将网页分享至朋友圈</p>
                {if $zbp->Config('paipk1')->baiduShare!=""}{$zbp->Config('paipk1')->baiduShare}{/if}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
            </div>
        </div>
    </div>
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
            {if $zbp->Config('paipk1')->baiduShare!=""}{$zbp->Config('paipk1')->baiduShare}{/if}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
          </div>
        </div>
      </div>
    </div>
{/if}

{if $zbp->Config('paipk1')->ifOutLink=="1"}
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script><script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
{else}
    <script src='{$host}zb_users/theme/{$theme}/js/jquery.min.js'></script><script src='{$host}zb_users/theme/{$theme}/js/bootstrap.min.js'></script>
{/if}
    <script src='{$host}zb_users/theme/{$theme}/js/custom.js'></script>
    
{$footer}
</body>
</html>