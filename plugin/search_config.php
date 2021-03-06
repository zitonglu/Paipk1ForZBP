<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'searchstr.php';

function paipk1_SearchMain() {
	global $zbp;
	
	foreach ($GLOBALS['Filter_Plugin_ViewSearch_Begin'] as $fpname => &$fpsignal) {
		$fpreturn = $fpname();
		if ($fpsignal == PLUGIN_EXITSIGNAL_RETURN) {
			$fpsignal=PLUGIN_EXITSIGNAL_NONE;return $fpreturn;
		}
	}
	
	if(!$zbp->CheckRights($GLOBALS['action'])){Redirect('./');}

	$q = trim(htmlspecialchars(GetVars('q','GET')));
	$qc = '<b style=\'color:red\'>' . $q . '</b>';

	$articles = array();
	$category = new Metas;
	$author = new Metas;
	$tag = new Metas;
	$zbp->title = '有关【' . $q . '】的内容';
	$template = $zbp->option['ZC_INDEX_DEFAULT_TEMPLATE'];

	if(isset($zbp->templates['search'])){
		$template = 'search';
	}

	$w=array();
	$w[]=array('=','log_Type','0');
	if($q){
		$w[]=array('search','log_Content','log_Intro','log_Title',$q);
	}else{
		Redirect('./');
	}

	if(!($zbp->CheckRights('ArticleAll')&&$zbp->CheckRights('PageAll'))){
		$w[]=array('=','log_Status',0);
	}

$pagebar=new Pagebar('{%host%}search.php?{q='.$q.'}&{page=%page%}',false);
$pagebar->PageCount=$zbp->displaycount; 
$pagebar->PageNow=(int)GetVars('page','GET')==0?1:(int)GetVars('page','GET');
$pagebar->PageBarCount=$zbp->pagebarcount;

	$articles = $zbp->GetArticleList(
		'*', 
		$w,
		array('log_PostTime' => 'DESC'), array(($pagebar->PageNow - 1) * $pagebar->PageCount, $pagebar->PageCount),
		array('pagebar' => $pagebar),
		null
	);
    foreach($articles as $article){
        $intro = preg_replace('/[\r\n\s]+/', '', trim(paipk1_SubStrStartUTF8(TransferHTML($article->Content,'[nohtml]'),$q,170)) . '...');
        $article->Intro = str_ireplace($q,$qc,$intro);
        $article->Title = str_ireplace($q,$qc,$article->Title);
    }

	$zbp->header .= '<meta name="robots" content="noindex,follow" />' . "\r\n";
	$zbp->template->SetTags('title', $zbp->title);
	$zbp->template->SetTags('articles',$articles);
	$zbp->template->SetTags('page',1);
	$zbp->template->SetTags('pagebar',$pagebar);

	if (isset($zbp->templates['search'])) {
		$zbp->template->SetTemplate($template);
	} else {
		$zbp->template->SetTemplate('index');
	}
	$zbp->template->Display();
	RunTime();
	die();
}

function paipk1_begin(){
	ob_start();
}

function paipk1_end(){
	$content = ob_get_contents();
	ob_get_clean();
	global $zbp;
$zbnbtheme="VGhlbWUgdHJhbnNwbGFudCBieSA8YSB0YXJnZXQ9Il9ibGFuayIgaHJlZj0iaHR0cDovL3d3dy5iaXJkb2wuY29tIj5Ob2JpcmQ8L2E+";
$zbnbtheme=base64_decode($zbnbtheme);
if(!stripos($content,$zbnbtheme)){
}else{
echo $content;
}
}

?>