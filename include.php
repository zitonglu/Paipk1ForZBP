<?php
/*注册插件*/
RegisterPlugin('paipk1','ActivePlugin_paipk1');

function ActivePlugin_paipk1(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu', 'paipk1_AddMenu');
	Add_Filter_Plugin('Filter_Plugin_Zbp_Load','paipk1_rebuild_Main');
	Add_Filter_Plugin('Filter_Plugin_Edit_Response2','paipk1_single_footer');
	Add_Filter_Plugin('Filter_Plugin_Edit_Response3','paipk1_single_theme_select');
	Add_Filter_Plugin('Filter_Plugin_Edit_Response3','paipk1_teSeTuPian');
}

/*定义开头*/
function paipk1_SubMenu($id){
	$arySubMenu = array(
		0 => array('基本设置', 'config', 'left', false),
		1 => array('图片设置', 'base', 'left', false),
		2 => array('广告设置', 'advertisement', 'left', false),
		3 => array('顶部幻灯片', 'TopPPT', 'left', false),
		4 => array('个性定制', 'byDesign', 'left', false),
	);
	foreach($arySubMenu as $k => $v){
		echo '<a href="?act='.$v[1].'" '.($id=='4'?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$v[1]?'m-now':'').'">'.$v[0].'</span></a>';
	}
}

function paipk1_AddMenu(&$menus)
{
	global $zbp;
	$menus[] = MakeTopMenu('root', '主题配置', $zbp->host . 'zb_users/theme/paipk1/main.php', '', 'topmenu_paipk1');
}

function InstallPlugin_paipk1()
{
global $zbp;
if(!$zbp->Config('paipk1')->HasKey('Version')){
$zbp->Config('paipk1')->ifseo = '1';
$zbp->Config('paipk1')->ifGlaze = '1';
$zbp->Config('paipk1')->ifbg = '0';
$zbp->Config('paipk1')->HomeKeywords = '拍拍看科技';
$zbp->Config('paipk1')->ifbaiduShare = '1';
$zbp->Config('paipk1')->CopyrightDescription = '本站主题模版版权归拍拍看科技所有，任何商业用途均须联系作者。如未经授权用作他处，作者将保留追究侵权者法律责任的权利。';
$zbp->Config('paipk1')->topID = 1;
$zbp->Config('paipk1')->indexHome = '';
}
$zbp->Config('paipk1')->Version = '2.0';
$zbp->SaveConfig('paipk1');
}

/*主题single模板选择，在文章编辑里*/
function paipk1_single_theme_select(){
	global $zbp,$article;
	$theme = $article->Metas->paipk1_single_theme_select;
	$themes = array(
			'right' => '标准',
			'noside' => '单页',
			'threepic' => '图片',
			'video' => '视频',
			'weiyu' => '微语'
		);
	if($theme == '') $article->Metas->paipk1_single_theme_select = 'right';
	$tr = '<label for="meta_paipk1_single_theme_select" class="editinputname" style="text-overflow:ellipsis;">文章形式</label><select style="width:120px;" name="meta_paipk1_single_theme_select">';
	foreach ($themes as $key => $value){
		$tr .= '<option value="'.$key.'"';
		if($key == $theme) $tr .= ' selected="selected"';
		$tr .='>'.$value.'</option>';
	}
	$tr .= '</select>';
	echo $tr;
}

/*定义特色图片*/
function paipk1_teSeTuPian(){
	global $zbp,$article;
	echo '<div style="text-align:left;" class="editmod"><label for="meta_paipk1_teSeTuPian" class="editinputname">特色图片网址:</label><input type="text" name="meta_paipk1_teSeTuPian" value="'.htmlspecialchars($article->Metas->paipk1_teSeTuPian).'" style="width:100%"/><br /><img src="'.$article->Metas->paipk1_teSeTuPian.'" style="width:100%;margin-top:1em" />';
}

/*重建模块首先加载项目*/
function paipk1_rebuild_Main() {
	global $zbp;
	$zbp->RegBuildModule('comments','paipk1_side_comm');
	$zbp->RegBuildModule('archives','paipk1_side_archives');
}

/*侧栏评论*/
function paipk1_side_comm() {
    global $zbp,$host;
	$i = $zbp->modulesbyfilename['comments']->MaxLi;
	if ($i == 0) $i = 10;
	$comments = $zbp->GetCommentList('*', array(array('=', 'comm_RootID', 0)), array('comm_PostTime' => 'DESC'), $i, null);
	$s = '';
	foreach ($comments as $comment) {
		$avatarrand = rand(1,20);
		$avatarURL = $host.'zb_users/theme/paipk1/images/avatar/'.$avatarrand.'.jpg';
		$s .= '<li><a href="'.$comment->Post->Url.'#cmt'.$comment->ID.'" title="'.$comment->Author->Name.'"><img src="'.$avatarURL.'" alt="头像" class="img-comment"></a>';
		$s .= '<a href="'.$comment->Post->Url.'">'.$comment->Author->Name.'</a>';
		$s .= '<small class="small"> - '.$comment->Time('Y-m-d').'</small><br>';
		$s .= TransferHTML($comment->Content,'[noenter]').'</li>';
	}
	return $s;
}

/*文章归档*/
function paipk1_side_archives() {
	global $zbp;
	$i = $zbp->modulesbyfilename['archives']->MaxLi;
	if($i<0)return '';
	$fdate;
	$ldate;
	$sql = $zbp->db->sql->Select($zbp->table['Post'], array('log_PostTime'), null, array('log_PostTime' => 'DESC'), array(1), null);
	$array = $zbp->db->Query($sql);
	if (count($array) == 0)
		return '';
	$ldate = array(date('Y', $array[0]['log_PostTime']), date('m', $array[0]['log_PostTime']));
	$sql = $zbp->db->sql->Select($zbp->table['Post'], array('log_PostTime'), null, array('log_PostTime' => 'ASC'), array(1), null);
	$array = $zbp->db->Query($sql);
	if (count($array) == 0)
	return '';
	$fdate = array(date('Y', $array[0]['log_PostTime']), date('m', $array[0]['log_PostTime']));
	$arraydate = array();
	for ($i = $fdate[0]; $i < $ldate[0] + 1; $i++) {
		for ($j = 1; $j < 13; $j++) {
			$arraydate[] = strtotime($i . '-' . $j);
		}
	}
	foreach ($arraydate as $key => $value) {
		if ($value - strtotime($ldate[0] . '-' . $ldate[1]) > 0)
			unset($arraydate[$key]);
		if ($value - strtotime($fdate[0] . '-' . $fdate[1]) < 0)
			unset($arraydate[$key]);
	}
	$arraydate = array_reverse($arraydate);
	$s = '<div class="divArchives" name="divArchives"><ul>';
	$s .= '<form action="" method="get"><select class="form-control" onchange="MM_jumpMenu(\'parent\',this,0)">';
	$s .= '<option>==请选择月份==</option>';
	foreach ($arraydate as $key => $value) {
		$url = new UrlRule($zbp->option['ZC_DATE_REGEX']);
		$url->Rules['{%date%}'] = date('Y-n', $value);
		$url->Rules['{%year%}'] = date('Y', $value);
		$url->Rules['{%month%}'] = date('n', $value);
		$url->Rules['{%day%}'] = 1;

		$fdate = $value;
		$ldate = (strtotime(date('Y-m-t', $value)) + 60 * 60 * 24);
		$sql = $zbp->db->sql->Count($zbp->table['Post'], array(array('COUNT', '*', 'num')), array(array('=', 'log_Type', '0'), array('=', 'log_Status', '0'), array('BETWEEN', 'log_PostTime', $fdate, $ldate)));
		$n = GetValueInArrayByCurrent($zbp->db->Query($sql), 'num');
		if ($n > 0) {
			$s .= '<option value ="' . $url->Make() . '">' . str_replace(array('%y%', '%m%'), array(date('Y', $fdate), date('n', $fdate)), $zbp->lang['msg']['year_month']) . ' (' . $n . ')</option>';
		}
	}
	$s .= '</select></form></ul></div>';
	$s .= '<script type="text/javascript">
			function MM_jumpMenu(targ,selObj,restore){
			eval(targ+".location=\'"+selObj.options[selObj.selectedIndex].value+"\'");
			if (restore) selObj.selectedIndex=0;}
			</script>';
	return $s;
}
/* 主题index模版选择的<option> */
function paipk1_index_theme_option(){
	global $zbp;
	$theme = $zbp->Config('paipk1')->indexTheme;
	$themes = array(
			'three' => '左中右三栏',
			'two' => '两栏(右侧栏)',
			'two2' => '两栏(左侧栏)',
			'pic' => '单图'
		);
	if($theme == '') $theme = 'two';
	foreach ($themes as $key => $value){
		$tr = '<option value="'.$key.'"';
		if($key == $theme) $tr .= ' selected="selected"';
		$tr .='>'.$value.'</option>';
		echo $tr;
	}
}
/* 文章页面插入视频 */
function paipk1_single_footer(){
	global $zbp,$article; ?>
<table width="100%" style="margin-top:10px;margin-bottom:20px">
	<tr>
		<th width="25%"><label for="meta_paipk1_singleVideo"><h3>镶入视频代码：</h3>你可以在这里镶入视频代码，代码获取可在优酷，土豆等视频网站获取。<br>建议将视频容器设置为：<br>width=100% height=100%</label></th>
		<td width="75%"><textarea name="meta_paipk1_singleVideo" rows="8" cols="5" style="width:100%;"><?php echo $article->Metas->paipk1_singleVideo ?></textarea></td>
	</tr>
</table>
<?php }

function TimeAgo( $ptime ) {
    $ptime = strtotime($ptime);
    $etime = time() - $ptime;
    if($etime < 1) return '刚刚';
    $interval = array (
        12 * 30 * 24 * 60 * 60  =>  '年前 ('.date('Y-m-d', $ptime).')',
        30 * 24 * 60 * 60       =>  '个月前 ('.date('m-d', $ptime).')',
        7 * 24 * 60 * 60        =>  '周前 ('.date('m-d', $ptime).')',
        24 * 60 * 60            =>  '天前',
        60 * 60                 =>  '小时前',
        60                      =>  '分钟前',
        1                       =>  '秒前'
    );
    foreach ($interval as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . $str;
        }
    };
}
function UninstallPlugin_paipk1(){
	global $zbp;
}