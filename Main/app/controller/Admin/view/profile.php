<?php
include(realpath("view/header.php"));
$user=$_SESSION['user'];
?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<?php include("sidebar.php");?>
				</td>
				<td>
					<table cellpadding="25px" width="100%"><tr><td>
								<fieldset>
						<legend><h3><b>Profile</b></h3></legend>
							<table cellpadding="15px">
								<tr>
								<td width="25%">Name</td>
								<td width="55%">: <?php echo $user['name'] ;?> </td>
								<td rowspan="4" >
									<img src="../Images/user.png" height="200" valign="left"/>
									<br/>
									<a href="changeUserPic.php" >Change</a>
								</td>
								</tr>
								<tr>
								<td>Email</td>
								<td>:  <?php echo $user['email'] ;?></td>
								</tr>
								<tr>
								<td>Phone</td>
								<td>: <?php echo $user['phone'] ;?> </td>
								</tr>
								<tr>
								<td>Role</td>
								<td>: <?php echo $user['role'] ;?> </td>
								</tr>
								<tr>
								<td>Gender</td>
								<td>: <?php echo $user['gender'] ;?> </td>
								</tr>
								
							</table>						
						<hr/>
						
						<table valign="top">
							<tr>
								<td>
									<form action="editProfile.php">
										<Button>Edit Profile</Button>
									</form>
								</td>								
							</tr>
						</table>
						
						
					</fieldset>
				
						</td></tr></table>

				</td>
			</tr>
		</table>
	</body>
</html>