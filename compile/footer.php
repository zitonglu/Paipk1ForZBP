
<div class="container-fluid footer">
    <div class="container">
<?php if ($type=='index') { ?>
        <div class="footer-list col-sm-2 col-md-1">
            <h5>栏目</h5>
            <ul><?php  if(isset($modules['catalog'])){echo $modules['catalog']->Content;}  ?></ul>
        </div>
        <div class="footer-list col-sm-2 col-md-1">
            <h5>关于</h5>
            <ul><?php  if(isset($modules['footerabout'])){echo $modules['footerabout']->Content;}  ?></ul>
        </div>
        <div class="footer-list col-sm-2 col-md-1">
            <h5>联系</h5>
            <ul><?php  if(isset($modules['footercontact'])){echo $modules['footercontact']->Content;}  ?></ul>
        </div>
        <div class="footer-list col-sm-2 col-md-1">
            <h5>友情链接</h5>
            <ul><?php  if(isset($modules['footerlinks'])){echo $modules['footerlinks']->Content;}  ?></ul>
        </div>
        <div class="footer-list col-sm-4 col-md-offset-3 col-md-5">
            <h5>版权</h5>
<?php }else{  ?>
    <div class="footer-list">
<?php } ?>
            <?php if ($zbp->Config('paipk1')->CopyrightDescription!="") { ?><p><?php  echo $zbp->Config('paipk1')->CopyrightDescription;  ?></p><?php } ?>
            <p>
                Copyright © 2016-2017 <a href="<?php  echo $hose;  ?>" title="<?php  echo $name;  ?>"><?php  echo $name;  ?></a>&nbsp;          
                <?php if ($user->ID>0) { ?>
                <a href="<?php  echo $host;  ?>zb_system/admin/?act=admin" rel="nofollow" title="后台管理"><span class="glyphicon glyphicon-pencil"></span></a>
                <?php }else{  ?>
                <a href="<?php  echo $host;  ?>zb_system/cmd.php?act=login" rel="nofollow" title="后台登录"><span class="glyphicon glyphicon-user"></span></a>
                <?php } ?>
            </p>
            <p>Powered By <?php  echo $zblogphpabbrhtml;  ?>. Theme by <a href="http://www.paipk.com" title="拍拍看科技-专业z-blogPHP主题模版制作" target="_blank" >Paipk.com.</a></p>
            <p>
            <?php if ($zbp->Config('paipk1')->baike!="") { ?><?php  echo $zbp->Config('paipk1')->baike;  ?>&nbsp;<?php } ?>
            <?php  echo $copyright;  ?>
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
                <img src="http://api.qrserver.com/v1/create-qr-code/?size=256x256&amp;data=<?php  echo $article->Url;  ?>" class="img-responsive center-block" alt="文章网址的二维码">
                <p class="text-center weixin-share-p">打开微信，点击底部的“发现”，<br>使用“扫一扫”即可将网页分享至朋友圈</p>
                <?php if ($zbp->Config('paipk1')->baiduShare!="") { ?><?php  echo $zbp->Config('paipk1')->baiduShare;  ?><?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
            </div>
        </div>
    </div>
</div>

<?php if ($type!='index') { ?>
    <div class="modal fade" id="myshang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">谢谢您的打赏</h4>
          </div>
          <div class="modal-body">
            <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/include/shang.jpg" class="img-responsive center-block" alt="打赏图片">
            <p class="text-center weixin-share-p">打开微信，点击底部的“发现”，<br>使用“扫一扫”即可将请我喝可乐</p>
            <?php if ($zbp->Config('paipk1')->baiduShare!="") { ?><?php  echo $zbp->Config('paipk1')->baiduShare;  ?><?php } ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
          </div>
        </div>
      </div>
    </div>
<?php } ?>

<?php if ($zbp->Config('paipk1')->ifOutLink=="1") { ?>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script><script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<?php }else{  ?>
    <script src='<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/jquery.min.js'></script><script src='<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/bootstrap.min.js'></script>
<?php } ?>
    <script src='<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/custom.js'></script>
    
<?php  echo $footer;  ?>
</body>
</html>