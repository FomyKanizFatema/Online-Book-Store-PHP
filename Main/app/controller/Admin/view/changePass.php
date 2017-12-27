<?php include(realpath("view/header.php"));?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include("sidebar.php");?>
				</td>
				<td>
				<?php if(isset($_REQUEST['m'])){
					if($_REQUEST['m']==1){
				echo "Password Updated !";}
				}?>
					<table cellpadding="25px"><tr><td>
			<form action="changePassHandler.php" method='POST'>
			<fieldset>
				<legend>CHANGE PASSWORD</legend>
					<table>
						<tr>
						<td><b>Current Password  </b></td>				
						<td><b>: </b><input type="text" name="oldpass"/></td>
						</tr>
						<tr>
						<td><b>New Password </b></td>	
						<td><b>: </b><input type="text" name="newpass"/></td>
						</tr>
						<tr>
						<td><b>Retype New Password </b></td>	
						<td><b>: </b><input type="text" name="rnewpass"/></td>
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