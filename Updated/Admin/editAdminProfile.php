<?php include("adminHeader.php");
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
		<title>Tienda De Floris</title>
	</head>
	<body>
		
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<table border="1" cellpadding="10px" width="100%">
						<tr>
							<td>
				
							<h3 align="center"><b>Account</b></h3><hr/>
								<table border="1" cellpadding="10px">
											<tr><td><a href="adminHome.php.php">Dashboard</a></td></tr>
											<tr><td><a href="adminProfile.php">Profile</a></td></tr>
											
											<tr><td><a href="editAdminProfile.php">Edit Profile</a></td></tr>
											<tr><td><a href="changeAdminPic.php">Change Profile Picture</a></td></tr>
											<tr><td><a href="changePass.php">Change Password</a></td></tr>
											
											<tr><td><a href="../Home/home.php">Log out</a></td>	</tr>										
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Orders</b></h3><hr/>
								<table border="1" cellpadding="10px"width="100%">
											<tr><td><a href="pendingOrder.php">Pending Orders</a></td></tr>
											<tr><td><a href="revenue.php">Month's History</a></td></tr>
											<tr><td><a href="OrderHistory.php">All Orders</a></td></tr>
																				
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Users</b></h3><hr/>
								<table border="1" cellpadding="10px" width="100%">
											<tr><td><a href="userList.php">Userlist</a></td></tr>
											<tr><td><a href="addUser.php">Add New User</a></td></tr>
											<tr><td><a href="BlackList.php">BlackListed Users</a></td></tr>																				
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Books</b></h3><hr/>
								<table border="1" cellpadding="10px" width="100%">
											<tr><td><a href="bookList.php">Booklist</a></td></tr>											
											<tr><td><a href="AddBook.php">Add New Book</a></td></tr>
																				
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td>
								<table cellpadding="25px" width="100%"><tr><td>
					
					
								<form action="editHandler.php" width="100%">
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
					</fieldset><br/>
					<input type="submit" value="Edit" />
								
							
							</td>
						</tr>
					</table>
						
					</fieldset>
					</form>
						
						</td></tr></table>

				</td>
			</tr>
		</table>
			
	</body>
	

</html>

