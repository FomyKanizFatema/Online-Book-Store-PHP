<?php include("userHeader.php");?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include("sidebar_view.php");?>
				</td>
				<td>
					<table cellpadding="25px"><tr><td>
						<form action="passHandler.php">
			<fieldset>
				<legend>CHANGE PASSWORD</legend>
					<table>
						<tr>
						<td><b>Current Password  </b></td>				
						<td><b>: </b><input type="text" name="old"/></td>
						</tr>
						<tr>
						<td><b>New Password </b></td>	
						<td><b>: </b><input type="text" name="new"/></td>
						</tr>
						<tr>
						<td><b>Retype New Password </b></td>	
						<td><b>: </b><input type="text" name="rnew"/></td>
						</tr>
						
					</table>
					<hr>					
					<br/>
					<input type="submit" value="Submit">				
					
			</fieldset>
		</form>
						</td></tr></table>

				</td>
			</tr>
		</table>
	</body>
</html>