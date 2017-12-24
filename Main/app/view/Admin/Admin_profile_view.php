<?php include("adminHeader.php");?>

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
								<fieldset>
						<legend><h3><b>Profile</b></h3></legend>
							<table cellpadding="15px">
								<tr>
								<td width="25%">Name</td>
								<td width="55%">: <?php echo "Fomy Kaniz Fatema" ;?> </td>
								<td rowspan="4" >
									<img src="../Images/user.png" height="200" valign="left"/>
									<br/>
									<a href="changeUserPic.php" >Change</a>
								</td>
								</tr>
								<tr>
								<td>Email</td>
								<td>:  kfomy.aiub@gmail.com </td>
								</tr>
								<tr>
								<td>Department</td>
								<td>: <?php echo "CSSE";?> </td>
								</tr>
								<tr>
								<td>Gender</td>
								<td>: <?php echo "Female";?> </td>
								</tr>
								<tr>
								<td width="25%" >Date of Birth</td>
								<td>: <?php echo "07"."/"."12"."/"."1995";?> </td>
								</tr>
							</table>						
						<hr/>
						
						<table valign="top">
							<tr>
								<td>
									<form action="editAdminProfile.php">
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

