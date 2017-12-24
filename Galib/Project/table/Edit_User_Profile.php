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

<b>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  : </b> <input name="name" type="text" value="<?php  echo $currentUser['name']; ?>"/><br/><hr/>
<b>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </b> <input name="email" type="text" value="<?php  echo $currentUser['email']; ?>"/><img src="i.png"width="30" title="example@gmail.com"/><br/><hr/>

<b>Department &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp : </b> <input name="email" type="text" value="<?php  echo "CSSE" ?>"/><br/><hr/>


<b>Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</b>
<?php $m="male";$f="female";$o="other"?>
<input name="gender" type="radio" value="male" checked="<?php if ($currentUser['gender'] == $m){ echo 'checked'; } ?>"/>Male
<input name="gender" type="radio" value="female" checked="<?php if ($currentUser['gender'] == $f){ echo 'checked'; } ?>"/>Female
<input name="gender" type="radio" value="other" checked="<?php if ($currentUser['gender'] == $o){ echo 'checked'; } ?>"/>Other<br/><br/>

<hr/>


<table  >
<td><b>Date of Birth  &nbsp &nbsp &nbsp &nbsp &nbsp :</b>
<td>dd<br/><input name="dd" type="text"  value="<?php echo $currentUser['dd'];?>" / >  /
<td>mm<br/><input name="mm" type="text"  value="<?php echo $currentUser['mm'];?>"/> /
<td>yyyy<br/><input name="yyyy" type="text" value="<?php echo $currentUser['yyyy'];?>"/ ><td>
</td>

</table>
<hr/>

	<input type="submit" value="Update"/>&nbsp &nbsp
	<input type="reset" value="Reset"/>

</fieldset>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>