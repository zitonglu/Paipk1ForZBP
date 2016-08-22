<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="container-fluid footer">
    <div class="container">
{if $type=='index'}
        <div class="footer-list col-sm-2 col-md-1">
            <h5>栏目</h5>
            <ul>{module:catalog}</ul>
        </div>
        <div class="footer-list col-sm-2 col-md-1">
            <h5>关于</h5>
            <ul>{module:footerabout}</ul>
        </div>
        <div class="footer-list col-sm-2 col-md-1">
            <h5>联系</h5>
            <ul>{module:footercontact}</ul>
        </div>
        <div class="footer-list col-sm-2 col-md-1">
            <h5>友情链接</h5>
            <ul>{module:footerlinks}</ul>
        </div>
        <div class="footer-list col-sm-4 col-md-offset-3 col-md-5">
            <h5>版权</h5>
{else}
    <div class="footer-list">
{/if}
            {if $zbp->Config('paipk1')->CopyrightDescription!=""}<p>{$zbp->Config('paipk1')->CopyrightDescription}</p>{/if}
            <p>
                Copyright © 2016-2017 <a href="{$hose}" title="{$name}">{$name}</a>&nbsp;          
                {if $user.ID>0}
                <a href="{$host}zb_system/admin/?act=admin" rel="nofollow" title="后台管理"><span class="glyphicon glyphicon-pencil"></span></a>
                {else}
                <a href="{$host}zb_system/cmd.php?act=login" rel="nofollow" title="后台登录"><span class="glyphicon glyphicon-user"></span></a>
                {/if}
            </p>
            <p>Powered By {$zblogphpabbrhtml}. Theme by <a href="http://www.paipk.com" title="拍拍看科技-专业z-blogPHP主题模版制作" target="_blank" >Paipk.com.</a></p>
            <p>
            {if $zbp->Config('paipk1')->baike!=""}{$zbp->Config('paipk1')->baike}&nbsp;{/if}
            {$copyright}
            </p>
        </div>
    </div>
</div>

<div class="modal fade" id="myshare" tabindex="-1" role="dialog" aria-labelledby="myshare">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myshare">谢谢您的分享</h4>
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
            <img src="{$host}zb_users/theme/{$theme}/include/shang.png" class="img-responsive center-block" alt="打赏图片">
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