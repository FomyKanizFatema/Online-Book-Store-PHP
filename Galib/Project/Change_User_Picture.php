<?php include("headerUserSignedIn.php");?>
<html>
	<head>
	</head>
	<body width="95%" >
		<table border='1' width="100%">
			<tr>
				<td width="20%" > 
					<table cellpadding="15px" align="center">
						<tr ><th >Account</th></tr>
						<tr align="center"><td><a href="userDashboard.php">Dashboard</td></tr>
						<tr align="center"><td><a href="View_User_Profile.php">View Profile</td></tr>
						<tr align="center"><td><a href="Edit_User_Profile.php">Edit Profile</td></tr>
						<tr align="center"><td><a href="Change_User_Picture.php">Change Profile Picture</td></tr>
						<tr align="center"><td><a href="Change_User_Pass.php">Change Password</td></tr>						
					</table>
				</td>
				<td>
				<form>
					<fieldset>
						<legend>Change Picture</legend>
						<img src="p.png"height ="150"/><br/><br/>
						<input type="file" name="changeImage"/>
						<hr/>
						<input type="submit" value="submit"/>
					</fieldset>
				</form>
				</td>
			</tr>
		</table>
	</body>
</html>