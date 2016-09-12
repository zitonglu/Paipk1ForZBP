<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('paipk1')) {$zbp->ShowError(48);die();}
$blogtitle="主题配置";
$act = "";
if ($_GET['act']){
$act = $_GET['act'] == "" ? 'base' : $_GET['act'];
}

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>

<div id="divMain">
  <div class="divHeader2"><?php echo $blogtitle;?></div>
  <div class="SubMenu">
    <?php paipk1_SubMenu($act);?>
    <a href="http://www.paipk.com/" target="_blank"><span class="m-left">设置帮助(wiki)</span></a>
  </div>
  <div id="divMain2">
<?php if ($act == 'base' || $act == 'shangjpg'){?><!--图片设置-->
    <table width="100%" border="1" width="100%" class="tableBorder">
    <tr>
      <th scope="col" height="32" width="150px">配置项</th>
      <th scope="col">配置内容</th>
      <th scope="col" width="500px">配置说明</th>
    </tr>
    <form enctype="multipart/form-data" method="post" action="save.php?type=base">
      <tr>
        <td><label for="logo.jpg">主题LOGO设置</label></td>
        <td><input name="logo.png" type="file"/>
          <input name="" type="Submit" class="button" value="上传LOGO图片"/></td>
        <td>png格式</td>
      </tr>
    </form>
    <form enctype="multipart/form-data" method="post" action="save.php?type=shangjpg">
      <tr>
        <td><label for="shang.jpg">文章打赏图片</label></td>
        <td><input name="shang.png" type="file"/>
          <input name="" type="Submit" class="button" value="上传默认图片"/></td>
        <td>图片格式JPG，大小随意</td>
      </tr>
    </form>
    </table>
<?php } ?>
<?php if ($act == 'config' || $act == ''){?><!--基本设置-->
<?php
if(isset($_POST['ifOutLink'])){
  $zbp->Config('paipk1')->ifOutLink = $_POST['ifOutLink'];
  $zbp->Config('paipk1')->ifseo = $_POST['ifseo'];
  $zbp->Config('paipk1')->HomeKeywords = $_POST['HomeKeywords'];
  $zbp->Config('paipk1')->HomeDescription = $_POST['HomeDescription'];
  $zbp->Config('paipk1')->baiduTJ = $_POST['baiduTJ'];
  $zbp->Config('paipk1')->baiduShare = $_POST['baiduShare'];
  $zbp->Config('paipk1')->CopyrightDescription = $_POST['CopyrightDescription'];
  $zbp->Config('paipk1')->baike = $_POST['baike'];
  $zbp->Config('paipk1')->ifPPT = $_POST['ifPPT'];
  $zbp->Config('paipk1')->topID = $_POST['topID'];
  $zbp->SaveConfig('paipk1');
    $zbp->ShowHint('good');
}
?>
    <form id="form-postdata" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php">
      <table width="100%" border="1" width="100%" class="tableBorder">
      <tr>
        <th scope="col" height="32" width="150px">配置项</th>
        <th scope="col">配置内容</th>
        <th scope="col" width="500px">使用说明</th>
      </tr>
      <tr>
        <td scope="row"><strong>外部JS和CSS</strong></td>
        <td><input name="ifOutLink" type="text" class="checkbox" style="display:none;" value="<?php echo $zbp->Config('paipk1')->ifOutLink; ?>">
      </input></td>
      <td>开启后默认调用百度库</td>
      </tr>
      <tr>
        <td scope="row"><strong>网站SEO</strong></td>
        <td><input name="ifseo" type="text" class="checkbox" style="display:none;" value="<?php echo $zbp->Config('paipk1')->ifseo; ?>">
          </input></td>
        <td>用其他SEO插件请关闭</td>
      </tr>
      <tr>
        <td scope="row">首页关键词</td>
        <td><input name="HomeKeywords" type="text" style="width:96%" value="<?php echo $zbp->Config('paipk1')->HomeKeywords; ?>">
          </input></td>
        <td>多个词汇用,隔开</td>
      </tr>
      <tr>
        <td scope="row">首页描述</td>
        <td><textarea name="HomeDescription" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->HomeDescription; ?></textarea></td>
        <td>留空为副标题</td>
      </tr>
      <tr>
        <td scope="row"><strong>首页幻灯片</strong></td>
        <td>
        <input name="ifPPT" type="text" class="checkbox" style="display:none;" value="<?php echo $zbp->Config('paipk1')->ifPPT; ?>"></input></td>
        <td>开启后置顶文章为幻灯片模式</td>
      </tr>
      <tr>
        <td scope="row">置顶文章</td>
        <td><input name="topID" type="text" style="width:15%" value="<?php echo $zbp->Config('paipk1')->topID; ?>">
          </input></td>
        <td>输入置顶文章的ID数字</td>
      </tr>
      <tr>
        <td scope="row">百度统计代码</td>
        <td><textarea name="baiduTJ" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->baiduTJ; ?></textarea></td>
        <td>代码添加至网站全部页面的head标签前</td>
      </tr>
      <tr>
        <td scope="row">百度分享代码</td>
        <td><textarea name="baiduShare" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->baiduShare; ?></textarea></td>
        <td>相应处会调用分享代码</td>
      </tr>
      <tr>
        <td scope="row">版权说明</td>
        <td><textarea name="CopyrightDescription" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->CopyrightDescription; ?></textarea></td>
        <td>显示在每页底部</td>
      </tr>
      <tr>
        <td scope="row">备案号</td>
        <td><input name="baike" type="text" style="width:96%" value="<?php echo $zbp->Config('paipk1')->baike; ?>">
          </input></td>
        <td>显示在每页底部</td>
      </tr>
      </table>
      <br/>
      <input class="button" type="submit" value="保存设置" />
    </form>
<?php } ?>
<?php if ($act == 'advertisement'){?><!--广告设置-->
<?php
  if(isset($_POST['PageAD1'])){
    $zbp->Config('paipk1')->PageAD1 = $_POST['PageAD1'];
    $zbp->Config('paipk1')->PageAD2 = $_POST['PageAD2'];
    $zbp->Config('paipk1')->PageTop = $_POST['PageTop'];
    $zbp->SaveConfig('paipk1');
    $zbp->ShowHint('good');
  }
?>
    <form id="form-postdata" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php?act=advertisement">
      <table width="100%" border="1" width="100%" class="tableBorder">
      <tr>
        <th scope="col" height="32" width="150px">配置项</th>
        <th scope="col">配置内容</th>
        <th scope="col" width="500px">使用说明</th>
      </tr>
      <tr>
        <td scope="row">文章顶部广告</td>
        <td><textarea name="PageTop" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->PageTop; ?></textarea></td>
        <td>文章顶部的广告位，留空为搜索栏</td>
      </tr>
      <tr>
        <td scope="row">文章底部广告1</td>
        <td><textarea name="PageAD1" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->PageAD1; ?></textarea></td>
        <td>文章底部的广告代码</td>
      </tr>
      <tr>
        <td scope="row">文章底部广告2</td>
        <td><textarea name="PageAD2" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->PageAD2; ?></textarea></td>
        <td>文章底部的广告代码</td>
      </tr>
      </table>
      <br/>
      <input name="ok" class="button" type="submit" value="保存设置" />
    </form>
<?php } ?>
<?php if ($act == 'byDesign'){?><!--个性定制-->
    <h3 style="margin-top:30px">定制页面</h3>
    <p>模版可根据客户的要求进行<strong>私人定制</strong>，如果有需要的朋友，请<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=910109610&amp;site=qq&amp;menu=yes" title="联系我们" target="_black">联系作者</a>。
    我们会按低于市场的价格给您优先制作。</p>
    <h3 style="margin-top:30px">联系方式</h3>
      <ul>
        <li>联系方式：admin@paipk.com（#换成@）。来信请在主题中备注相关需求，您也可以在留言咨询相关信息。</li>
        <li>作者blog：<a href="http://www.paipk.com" target="_black" title="拍拍看科技">http://www.paipk.com</a></li>
        <li>BUG页面提交：<a href="http://www.paipk.com/?id=67" target="_black" title="BUG提交">http://www.paipk.com/?id=67</a></li>
     </ul>
<?php } ?>
  </div>
</div>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
?>
