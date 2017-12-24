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
				
				<br/>
					
					<td width="85%">
					<form action="editHandler.php">
					<fieldset>
						<legend>Edit Profile</legend>
						<table align="center">
						<tr>
						<td><b>Name </b></td>				
						<td><b>: </b><input type="text" name="name" value="<?php echo $currentUser['name'];?>"</td>
						
						</tr>
						
						<tr>
						<td><b>Email </b></td>				
						<td><b>: </b><input type="text" name="email" value="<?php echo $currentUser['email'];?>"></td>
						</tr>

						<tr>
						<td><b>Department </b></td>				
						<td><b>: </b><input type="text" name="dept" value="<?php echo $currentUser['dept'];?>"></td>
						</tr>	
						
						
						
						<tr>
							<td colspan="2">
							<fieldset>
								<legend>Gender</legend>
								<?php $m="male";$f="female";$o="other"?>
								<input type="radio" name="gender" value="male" <?php if ($currentUser['gender'] == "Male"){ echo 'checked'; } ?>/>Male
								<input type="radio" name="gender" value="female" <?php if ($currentUser['gender'] == "Female"){ echo 'checked'; } ?>/>Female
								<input type="radio" name="gender" value="other" <?php if ($currentUser['gender'] == "Other"){ echo 'checked'; } ?>/>Other
							</fieldset>
							</td>
						</tr>
						
						<tr >
							<td colspan="2">
							<fieldset>
								<legend>Date of Birth</legend>
								<table>
						<tr>
							<td>dd</td>
							<td/>
							<td>mm</td>
							<td/>
							<td>yyyy</td>
						</tr>
						<tr valign="top">
							<td>
								<!--<form action="handler.php">-->
									<input type="dd" name="date" size='1'value="<?php echo $currentUser['dd'];?>">
								<!--</form>-->
							</td>
							<td>/</td>
							<td>
								<!--<form action="handler.php">-->
									<input type="text" name="month" size='1' value="<?php echo $currentUser['mm'];?>">
								<!--</form>-->
							</td>
							<td>/</td>
							<td>
								<!--<form action="handler.php">-->
									<input type="text" name="year"  size='1'value="<?php echo $currentUser['yyyy'];?>"/>
								
							</td>
						</tr>
					</table>
					<input type="submit" value="Edit" />
								
							</fieldset>
							</td>
						</tr>
					</table>
						
					</fieldset>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>