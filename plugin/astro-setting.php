<tr>
	<td scope="row">第一栏分类</td>
	<td>
		<select name="AstroFirstID" style="width:150px">
			<?php paipk1_categorys_option($zbp->Config('paipk1')->AstroFirstID) ?>
		</select>
	</td>
	<td>首页顶部分类</td>
</tr>
<tr>
	<td scope="row">第二栏分类</td>
	<td>
		<select name="AstroSecondID" style="width:150px">
			<?php paipk1_categorys_option($zbp->Config('paipk1')->AstroSecondID) ?>
		</select>
	</td>
	<td>首页中间的分类</td>
</tr>
<tr>
	<td scope="row">第三栏分类</td>
	<td>
		<select name="AstroThreeID" style="width:150px">
			<?php paipk1_categorys_option($zbp->Config('paipk1')->AstroThreeID) ?>
		</select>
	</td>
	<td>首页底部的分类</td>
</tr>