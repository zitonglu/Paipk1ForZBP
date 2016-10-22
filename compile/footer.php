
<div class="container-fluid bottom">
    <div class="container"><div class="row">
        <div class="col-sm-7 bottom-div">
            <p>将这个网站<a class="bottom-a" href="#" role="button" data-toggle="modal" data-target="#myshare">分享</a>给您的朋友吧！</p>
        </div>
        <div class="btn-group col-sm-5 bottom-div">
            <a class="btn btn-default" href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;上一篇</a>
            <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myshare"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;微信分享</a>
            <a class="btn btn-default" href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>" role="button">下一篇&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div></div>
</div>
<div class="container-fluid footer">
    <div class="container">
    <div class="footer-list">
            <?php if ($zbp->Config('paipk1')->CopyrightDescription!="") { ?><p><?php  echo $zbp->Config('paipk1')->CopyrightDescription;  ?></p><?php } ?>
            <p>
                Copyright © 2016-2017 <a href="<?php  echo $hose;  ?>" title="<?php  echo $name;  ?>"><?php  echo $name;  ?></a>&nbsp;    
                <?php if ($user->ID>0) { ?>
                <a href="<?php  echo $host;  ?>zb_system/admin/?act=admin" rel="nofollow" title="后台管理"><span class="glyphicon glyphicon-pencil"></span></a>
                <?php }else{  ?>
                <a href="<?php  echo $host;  ?>zb_system/cmd.php?act=login" rel="nofollow" title="后台登录"><span class="glyphicon glyphicon-user"></span></a>
                <?php } ?>
                <?php if ($zbp->Config('paipk1')->baike!="") { ?>&nbsp;<?php  echo $zbp->Config('paipk1')->baike;  ?>&nbsp;<?php } ?>
                <?php  echo $copyright;  ?>&nbsp;
Powered By <?php  echo $zblogphpabbrhtml;  ?>. Theme by <a href="http://www.paipk.com" title="拍拍看科技-专业z-blogPHP主题模版制作" target="_blank" >Paipk.com.</a>
            </p>
        </div>
    </div>
</div>
<div class="modal fade" id="myshare" tabindex="-1" role="dialog" aria-labelledby="myshare">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="mythinks">谢谢您的分享</h4>
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