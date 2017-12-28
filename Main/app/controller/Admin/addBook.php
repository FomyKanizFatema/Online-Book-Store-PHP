<?Php 
session_start();
include("view/header.php");

 ?>

<html>
	<head>
		<title>Tienda De Floris</title>
	</head>
	<body>
		
		<table border="0" width="100%">
			<tr valign="top">
				<td width="20%">
					<?php include("view/sidebar.php");?>
					
				</td>

				<!--td width="15%">
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
											<tr><td><a href="profit.php">Month's History</a></td></tr>
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
				</td-->
				<td>
					
								<form action="signIn.php">
								<h3 align="center"><b>Add New Book<b><h3>
						<fieldset>
								<table align="center" id="formcontainer">
									<tr>
										<br/>
										<td><b>Book Name </b></td>				
										<td><b>: </b><input type="text" name="bname" width="100%"></td>				
									</tr>
									
									<tr>
										<td><b>Author </b></td>				
										<td><b>: </b><input type="text" name="author"></td>
									</tr>
									
									<tr>
										<td><b>Buying Price </b></td>				
										<td><b>: </b><input type="text" name="price"></td>
									</tr>
									<tr>
										<td><b>Course</b></td>				
										<td><b>: </b><input type="text" name="author"></td>
									</tr>
									
									<tr>
										<td><b>Deparment </b></td>				
										<td><b>: </b><input type="text" name="price"></td>
									</tr>
									
									<tr>
										<td><b>Number of Copies </b></td>				
										<td><b>: </b><input type="text" name="price"></td>
									</tr>
									
									
									
									
									
									
									<tr>
										<td colspan='2' align="center">
											<br/>
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" >
										</td>
										
									</tr>
								</table>						
								
								
						</fieldset>
					</form>
						
					</table>
				</td>
			</tr>
		</table>
			
	</body>
	

</html>

