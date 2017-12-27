<?php include(realpath("view/header.php"));?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include("sidebar_view.php");?>
				</td>
				<td>
					<table cellpadding="25px" width="100%" align="center"><tr><td>
						<form action="changePic.php">
					<fieldset>
						<legend>Change Picture</legend>
						<img src="../Images/user.png"height ="150"/><br/><br/>
						<input type="file" name="changeImage"/>
						<hr/>
						<input type="submit" value="submit"/>
					</fieldset>
				</form>
						</td></tr></table>

				</td>
			</tr>
		</table>
	</body>
</html>