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
						<tr align="center"><td><a href="userDashboard.php.php">Dashboard</td></tr>
						<tr align="center"><td><a href="View_User_Profile.php">View Profile</td></tr>
						<tr align="center"><td><a href="Edit_User_Profile.php">Edit Profile</td></tr>
						<tr align="center"><td><a href="Change_User_Picture.php">Change Profile Picture</td></tr>
						<tr align="center"><td><a href="Change_User_Pass.php">Change Password</td></tr>						
					</table>
				</td>
				<td width="80%">
				<br/>
					<fieldset>
						<legend>Profile</legend>
							<table cellpadding="15px">
								<tr>
								<td width="25%">Name</td>
								<td width="55%">: <?php echo $currentUser['name'];?> </td>
								<td rowspan="4" >
									<img src="p.png" height="200" valign="left"/>
									<br/>
									<a href="ChangePicture.html" >Change</a>
								</td>
								</tr>
								<tr>
								<td>Email</td>
								<td>: <?php echo $currentUser['email'];?> </td>
								</tr>
								<tr>
								<td>Department</td>
								<td>: <?php echo $currentUser['dept'];?> </td>
								</tr>
								<tr>
								<td>Gender</td>
								<td>: <?php echo $currentUser['gender'];?> </td>
								</tr>
								<tr>
								<td>Role</td>
								<td>: User</td>
								</tr>
								<tr>
								<td>Status</td>
								<td>: Active</td>
								</tr>
								<tr>
								<td width="25%" >Date of Birth</td>
								<td>: <?php echo $currentUser['dd']."/".$currentUser['mm']."/".$currentUser['yyyy'];?> </td>
								</tr>
							</table>						
						<hr/>
						
						<table valign="top">
							<tr>
								<td>
									<form action="Edit_User_Profile.php">
										<Button>Edit Profile</Button>
									</form>
								</td>
								<td>
									 
									<form action="Delete_User_Profile.php">
										<Button><font color="red">Delete Account</font></Button>
									</form>
								</td>
							</tr>
						</table>
						
						
					</fieldset>
				
				</td>
			</tr>
		</table>
	</body>
</html>