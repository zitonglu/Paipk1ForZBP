{php}
if ($zbp->Config('paipk1')->indexTheme=="there") {
	include $this->GetTemplate('index-there');
}elseif ($zbp->Config('paipk1')->indexTheme=="pic") {
	include $this->GetTemplate('index-pic');
}else{
	include $this->GetTemplate('index-two');
}
{/php}