<!DOCTYPE html>
<html lang="<?php  echo $language;  ?>">
<head>
	<meta charset="UTF-8">
	<title><?php  echo $name;  ?>的404页面</title>
</head>
<body>
	<script type="text/javascript" src="http://www.qq.com/404/search_children.js" charset="utf-8" homePageUrl="<?php  echo $host;  ?>" homePageName="返回<?php  echo $name;  ?>"></script>
	<script>
		window.onload=function changeURL() {
			if (!document.getElementsByClassName('desc_link')) return true;
			oldUrl=document.getElementsByClassName('desc_link');
			oldUrl[0].setAttribute('href', "<?php  echo $host;  ?>");
			oldUrl[0].firstChild.nodeValue="返回<?php  echo $name;  ?>";
		}
	</script>
</body>
</html>