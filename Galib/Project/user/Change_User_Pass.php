<?php include("headerUserSignedIn.php");
$currentUser['name']="kaniz";
$currentUser['email']="kaniz@gmail.com";
$currentUser['dept']="CSSE";
$currentUser['gender']="Female";
$currentUser['dd']="07";
$currentUser['mm']="Dec";
$currentUser['yyyy']="1995";

?>

<html>
	<head>
	</head>
	<body width="95%" >
		<table border='1' width="100%" cellpadding="15px">
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
				<td width="80%">
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
				</td>
			</tr>
		</table>
	</body>
</html>