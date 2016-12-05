<tr>
	<td scope="row">第一栏分类ID</td>
	<td>
		<select name="AstroFirstID" style="width:150px">
			<?php paipk1_categorys_option($zbp->Config('paipk1')->AstroFirstID) ?>
		</select>
	</td>
	<td>请输入对应的分类ID(数字)</td>
</tr>
<tr>
	<td scope="row">第二栏分类ID</td>
	<td>
		<select name="AstroSecondID" style="width:150px">
			<?php paipk1_categorys_option($zbp->Config('paipk1')->AstroSecondID) ?>
		</select>
	</td>
	<td>请输入对应的分类ID(数字)</td>
</tr>