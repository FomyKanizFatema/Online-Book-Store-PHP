<?php include("headerUserSignedIn.php");?>
<html>
	<head>
	</head>
	<body width="95%" >
		<table border='1' width="100%">
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
					<table border='1' width="100%" cellpadding="15px">
						<tr><td><a href="myOrders.php"><b>My Orders<b></a><br/>Total Order : <hr/></td></tr>
						<tr><td><a href="myList.php"><b>My WishList<b></a><br/>Total Item : <hr/></td></tr>
						<tr><td><a href="myReviews.php"><b>My Reviews<b></a><br/>Total Review : <hr/></td></tr>
					</table>
				
				</td>
			</tr>
		</table>
	</body>
</html>