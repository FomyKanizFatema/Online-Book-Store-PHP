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
					
								<form action="signIn.php">
								<h3 align="center"><b>Add New User<b><h3>
						<fieldset>
								<table align="center" id="formcontainer">
									<tr>
										<br/>
										<td><b>Name </b></td>				
										<td><b>: </b><input type="text" name="name" width="100%"></td>				
									</tr>
									
									<tr>
										<td><b>Email </b></td>				
										<td><b>: </b><input type="text" name="email"></td>
									</tr>
									
									<tr>
										<td><b>User Name </b></td>				
										<td><b>: </b><input type="text" name="uname"></td>
									</tr>
									
									<tr>
										<td><b>Department <b></td>	
										<td>
											<select name='dept'>
												<option value='CS'>CSE/CSSE/CS/SE</option>
												<option value='EEE'>EEE</option>
												<option value='COE'>COE</option>
												<option value='BBA'>BBA</option>
												<option value='Arch'>Architecture</option>
												<option value='Law'>Law</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td colspan="2">
											<fieldset>
												<legend>Gender</legend>
													<input type="radio" name="gender" value="male"/>Male
													<input type="radio" name="gender" value="female"/>Female
													<input type="radio" name="gender" value="other"/>Other
											</fieldset>
										</td>
									</tr>
									
									<tr >
										<td colspan="2">
										
											<fieldset>
												<legend>Date of Birth</legend>
												<table id="birthdateContainer">
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
																<input type="dd" name="date" size='1'>
															<!--</form>-->
														</td>
														<td>/</td>
														<td>
															<!--<form action="handler.php">-->
																<input type="text" name="month" size='1'>
															<!--</form>-->
														</td>
														<td>/</td>
														<td>
															<!--<form action="handler.php">-->
																<input type="text" name="year" size='2'>
															<!--</form>-->
														</td>
													</tr>
													
													<tr>
														<td><b>Default Password <b></td>	
														<td><b>: </b><input type="text" name="pass"></td>
													</tr>
									
													<tr>
														<td><b>Role <b></td>	
														<td><b>: </b><input type="text" name="role"></td>
													</tr>	
													
												</table>
											</fieldset>
											
										</td>
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

