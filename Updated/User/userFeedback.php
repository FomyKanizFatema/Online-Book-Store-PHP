<?php include("userHeader.php");?>

<html>
<body>
		<table border="0" width="100%">
			<tr valign="top">
				<td width="15%">
					<table border="1" cellpadding="10px">
						<tr>
							<td>
				
							<h3 align="center"><b>Account</b></h3><hr/>
								<table border="1" cellpadding="10px">
											<tr><td><a href="userDashboard.php">Dashboard</a></td></tr>
											<tr><td><a href="userProfile.php">Profile</a></td></tr>
											<tr><td><a href="userOrderHistory.php">Order History</a></td></tr>
											<tr><td><a href="userWishlist.php">Wishlist</a></td></tr>
											<tr><td><a href="editUserProfile.php">Edit Profile</a></td></tr>
											<tr><td><a href="changeUserPic.php">Change Profile Picture</a></td></tr>
											<tr><td><a href="changePass.php">Change Password</a></td></tr>
											<tr><td><a href="userFeedBack.php">Feedback</a></td></tr>
											<tr><td><a href="../Home/home.php">Log out</a></td>	</tr>											
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table cellpadding="25px" width="100%"><tr><td>
						 <form action="" method="">
							<fieldset>
								<legend><h3><b>Send Feedback</b></h3></legend>
								<input type="text" name="feedback" id="feedback" size="50"/><br/><br/>
								<input type="submit" value="Submit"/>
							</fieldset>
						 </form>
						</td></tr></table>

				</td>
			</tr>
		</table>
	</body>
	
	
	<script type="text/javascript">
			
			
			document.getElementById('feedback').style.height="200px";
			document.getElementById('feedback').style.width="500px";
			
			
	</script>
</html>