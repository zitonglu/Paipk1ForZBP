{php}
if ($zbp->Config('paipk1')->indexTheme!="") {
	include $this->GetTemplate('index-'.$zbp->Config('paipk1')->indexTheme);
}else{
	include $this->GetTemplate('index-two');
}
{/php}