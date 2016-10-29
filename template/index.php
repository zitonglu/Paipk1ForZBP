{php}
if ($zbp->Config('paipk1')->indexTheme=="two") {
	include $this->GetTemplate('index-two');
}elseif ($zbp->Config('paipk1')->indexTheme=="pic") {
	include $this->GetTemplate('index-pic');
}else{
	include $this->GetTemplate('index-there');
}
{/php}