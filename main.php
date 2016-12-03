<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('paipk1')) {$zbp->ShowError(48);die();}
$blogtitle="主题配置";
$act=GetVars('act','GET');
if($act == "" ) $act= 'config' ;
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>

<div id="divMain">
  <div class="divHeader2"><?php echo $blogtitle;?></div>
  <div class="SubMenu">
    <?php paipk1_SubMenu($act);?>
    <a href="http://www.paipk.com/wiki/geziwiki.html" target="_blank"><span class="m-left">设置帮助(wiki)</span></a>
  </div>
  <div id="divMain2">
<?php if ($act == 'base' || $act == 'shangjpg'){?><!--图片设置-->
    <table width="100%" border="1" class="tableBorder">
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
  $zbp->Config('paipk1')->ifbaiduShare = $_POST['ifbaiduShare'];
  $zbp->Config('paipk1')->CopyrightDescription = $_POST['CopyrightDescription'];
  $zbp->Config('paipk1')->baike = $_POST['baike'];
  $zbp->Config('paipk1')->ifPPT = $_POST['ifPPT'];
  $zbp->Config('paipk1')->topID = $_POST['topID'];
  $zbp->Config('paipk1')->indexTheme = $_POST['indexTheme'];
  $zbp->Config('paipk1')->QQ = $_POST['QQ'];
  $zbp->Config('paipk1')->indexHome = $_POST['indexHome'];
  $zbp->Config('paipk1')->indexbottom = $_POST['indexbottom'];
  $zbp->SaveConfig('paipk1');
    $zbp->ShowHint('good');
}
?>
    <form id="base" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php">
      <table width="100%" border="1" class="tableBorder">
      <tr>
        <th scope="col" height="32" width="150px">配置项</th>
        <th scope="col">配置内容</th>
        <th scope="col" width="500px">使用说明</th>
      </tr>
      <tr>
        <td scope="row">首页模板</td>
        <td>
          <select name="indexTheme" style="width:150px">
            <?php paipk1_index_theme_option() ?> 
          </select>
          自定义首页模版：<input name="indexHome" type="text" style="width:10%" value="<?php echo $zbp->Config('paipk1')->indexHome; ?>">.php
        </td>
        <td>选择文章列表页面的默认模板</td>
      </tr>
      <tr>
        <td scope="row"><strong>外部JS和CSS</strong></td>
        <td><input name="ifOutLink" type="text" class="checkbox" style="display:none;" value="<?php echo $zbp->Config('paipk1')->ifOutLink; ?>">
      </td>
      <td>开启后默认调用百度库</td>
      </tr>
      <tr>
        <td scope="row"><strong>网站SEO</strong></td>
        <td><input name="ifseo" type="text" class="checkbox" style="display:none;" value="<?php echo $zbp->Config('paipk1')->ifseo; ?>">
          </td>
        <td>用其他SEO插件请关闭</td>
      </tr>
      <tr>
        <td scope="row">首页关键词</td>
        <td><input name="HomeKeywords" type="text" style="width:96%" value="<?php echo $zbp->Config('paipk1')->HomeKeywords; ?>">
          </td>
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
        <input name="ifPPT" type="text" class="checkbox" style="display:none;" value="<?php echo $zbp->Config('paipk1')->ifPPT; ?>"></td>
        <td>开启后置顶文章为幻灯片模式</td>
      </tr>
      <tr>
        <td scope="row">置顶文章</td>
        <td><input name="topID" type="text" style="width:15%" value="<?php echo $zbp->Config('paipk1')->topID; ?>">
          </td>
        <td>输入置顶文章的ID数字</td>
      </tr>
      <tr>
        <td scope="row">百度统计代码</td>
        <td><textarea name="baiduTJ" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->baiduTJ; ?></textarea></td>
        <td>代码添加至网站全部页面的head标签前</td>
      </tr>
      <tr>
        <td scope="row">文章分享</td>
        <td>
        <input name="ifbaiduShare" type="text" class="checkbox" style="display:none;" value="<?php echo $zbp->Config('paipk1')->ifbaiduShare; ?>"></td>
        <td>开启关闭文章的分享</td>
      </tr>
      <tr>
        <td scope="row">底部巨幕</td>
        <td><textarea name="indexbottom" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->indexbottom; ?></textarea></td>
        <td>在文章列表页面底部显示的内容，支持HTML</td>
      </tr>
      <tr>
        <td scope="row">版权说明</td>
        <td><textarea name="CopyrightDescription" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->CopyrightDescription; ?></textarea></td>
        <td>显示在每页底部</td>
      </tr>
      <tr>
        <td scope="row">备案号</td>
        <td><input name="baike" type="text" style="width:20%" value="<?php echo $zbp->Config('paipk1')->baike; ?>">
          </td>
        <td>显示在每页底部</td>
      </tr>
      <tr>
        <td scope="row">QQ号</td>
        <td><input name="QQ" type="text" style="width:20%" value="<?php echo $zbp->Config('paipk1')->QQ; ?>">
          </td>
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
    $zbp->SaveConfig('paipk1');
    $zbp->ShowHint('good');
  }
?>
    <form id="form-postdata" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php?act=advertisement">
      <table width="100%" border="1" class="tableBorder">
      <tr>
        <th scope="col" height="32" width="150px">配置项</th>
        <th scope="col">配置内容</th>
        <th scope="col" width="500px">使用说明</th>
      </tr>
      <tr>
        <td scope="row">文章底部广告</td>
        <td><textarea name="PageAD1" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->PageAD1; ?></textarea></td>
        <td>文章底部的广告代码</td>
      </tr>
      <tr>
        <td scope="row">评论底部广告</td>
        <td><textarea name="PageAD2" type="text" style="width:98%" ><?php echo $zbp->Config('paipk1')->PageAD2; ?></textarea></td>
        <td>文章底部的广告代码</td>
      </tr>
      </table>
      <br/>
      <input class="button" type="submit" value="保存设置" />
    </form>
<?php } ?>
<?php if ($act == 'TopPPT'){?><!--顶部幻灯片-->
<?php
if($_POST){
  $rules = array();
  $rule = array();
  $i=0;$Y=-1;
  $li='<div class="item"><a href="-aurl-" target="_blank" title="-pictitle-"><img src="-picurl-" alt="-pictitle-" class="topIMG"></a></div>';
  $tr='<tr><td><input type="checkbox" name="check"/></td><td><input name="picurl-id-" type="text" value="-picurl-" required="required"></td><td><input name="aurl-id-" type="text" value="-aurl-" required="required"></td><td><input name="pictitle-id-" type="text" value="-pictitle-"></td></tr>';
  $curli = "";$curtr = "";$html = "";$alltr = "";$one="";
foreach($_POST as $k=>$v){
  if($i % 3 == 0){
  $rule['picurl'] = (string)$v;
  $curtr = str_replace("-picurl-",$rule["picurl"],$tr);
  $curli = str_replace("-picurl-",$rule["picurl"],$li);
  }
  if($i % 3 == 1){
  $rule['aurl'] = (string)$v;
  $curtr = str_replace("-aurl-",$rule["aurl"],$curtr);
  $curli = str_replace("-aurl-",$rule["aurl"],$curli);
  }
  if($i % 3 == 2){
  $rule['pictitle'] = (string)$v;
  $curtr = str_replace("-pictitle-",$rule["pictitle"],$curtr);
  $curli = str_replace("-pictitle-",$rule["pictitle"],$curli);
  $curtr = str_replace("-id-",$Y,$curtr);
  $Y--;
    if ($one=="") {
      $curli = str_replace("class=\"item\"","class=\"item active\"",$curli);
      $one="end";
    }
  $alltr .= $curtr;
  $html .= $curli;
  $rules[]=json_encode($rule);
  }
  $i++;
}
file_put_contents("plugin/alltr.html", $alltr);
file_put_contents("plugin/out.html", $html);
$zbp->SaveConfig('paipk1');
$zbp->ShowHint('good');
  }
?>
<input type="submit" value="增加一页" id="addTable"/> <input type="submit" value="删除选行" id="deleteTable"/>
  <hr>
  <form id="PPT" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php?act=TopPPT">
  <table>
    <thead>
      <tr>
        <th>选项</th>
        <th>增加图片URL地址(*)</th>
        <th>链接地址(*)</th>
        <th>图片名称</th>
      </tr>
    </thead>
    <tbody>
<?php
  if(is_file('plugin/alltr.html')) {
    include 'plugin/alltr.html';
  }
?>
    </tbody>
  </table><br/>
  <input class="button" type="submit" value="保存设置" />
  </form>
  <p>*顶部幻灯片需在基础设置里面开启才能看到。<br>默认的幻灯片是增加一个图片，点击这个图片会增加一个弹出式链接。所以前两项为必填项目，最后一项为选填项。</p>
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script>
// 幻灯片增加行代码
$(document).ready(function(){
var i=0;
$("#addTable").click(function(){
var tr="<tr><td><input type=\"checkbox\" name=\"check\"/></td><td><input name=\"picurl"+i+"\" type=\"text\" required=\"required\"></td><td><input name=\"aurl"+i+"\" type=\"text\" required=\"required\"></td><td><input name=\"pictitle"+i+"\" type=\"text\"></td></tr>";
i++;
$("#PPT").append(tr);
});
$("#deleteTable").click(function(){
var check = document.getElementsByName("check");
for(var i=0;i<check.length;i++){
if(check[i].checked){
document.getElementById('PPT').deleteRow(i);
i--;
}
}
});
});
</script>
<?php } ?>
<?php if ($act == 'byDesign'){?><!--个性定制-->
<?php
if(isset($_POST['ActivationCode'])){
  $zbp->Config('paipk1')->ActivationCode = $_POST['ActivationCode'];
  if(!is_null(GetVars('XXX'))) $zbp->Config('paipk1')->XXX = $_POST['XXX'];
  $zbp->SaveConfig('paipk1');
  $zbp->ShowHint('good');
}?>
<form id="design" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php?act=byDesign">
  <table width="100%" border="1" class="tableBorder">
  <tr>
    <th scope="col" height="32" width="150px">配置项</th>
    <th scope="col">配置内容</th>
    <th scope="col" width="500px">使用说明</th>
  </tr>
  <tr>
    <td scope="row">激活码</td>
    <td>
      <input name="ActivationCode" type="text" style="width:40%" value="<?php echo $zbp->Config('paipk1')->ActivationCode; ?>">
    </td>
    <td>激活定制主题用的密码</td>
  </tr>
<?php
switch ($zbp->Config('paipk1')->ActivationCode) {
  case '256':
    include 'plugin/astro.php';
} 
?>
</table>
  <br/>
  <input class="button" type="submit" value="保存设置" />
</form>
    <h3 style="margin-top:30px">定制页面</h3>
    <p>模版可根据客户的要求进行<strong>私人定制</strong>，如果有需要的朋友，请<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=910109610&amp;site=qq&amp;menu=yes" title="联系我们" target="_black">联系作者</a>。
    我们会按低于市场的价格给您优先制作。</p>
    <h3 style="margin-top:30px">联系方式</h3>
      <ul>
        <li>联系方式：admin@paipk.com（#换成@）。来信请在主题中备注相关需求，您也可以在留言咨询相关信息。</li>
        <li>作者blog：<a href="http://www.paipk.com" target="_black" title="拍拍看科技">http://www.paipk.com</a></li>
        <li>BUG页面提交：<a href="http://www.paipk.com/67.html" target="_black" title="BUG提交">http://www.paipk.com/67.html</a></li>
     </ul>
<?php } ?>
  </div>
</div>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
?>
