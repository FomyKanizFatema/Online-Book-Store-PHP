<?php
include(realpath("../../../links.php"));
?>

<table border="1" cellpadding="10px">
	<tr>
		<td>

		<h3 align="center"><b>Account</b></h3><hr/>
			<table border="1" cellpadding="10px">
						<tr><td><a href="<?php echo $userDashboard_controller;?>">Dashboard</a></td></tr>
						<tr><td><a href="<?php echo $userProfile_controller ;?>userProfile.php">Profile</a></td></tr>
						<tr><td><a href="<?php echo $userOrderHistory_controller;?>userOrderHistory.php">Order History</a></td></tr>
						<tr><td><a href="<?php echo $userWishlist_controller;?>userWishlist.php">Wishlist</a></td></tr>
						<tr><td><a href="<?php echo $userEditProfile_controller;?>editUserProfile.php">Edit Profile</a></td></tr>
						<tr><td><a href="<?php echo $userChangePic_controller;?>changeUserPic.php">Change Profile Picture</a></td></tr>
						<tr><td><a href="<?php echo $userChangePass_controller;?>changePass.php">Change Password</a></td></tr>
						<tr><td><a href="<?php echo $userFeedback_controller;?>userFeedBack.php">Feedback</a></td></tr>
						<tr><td><a href="<?php echo $logOut;?>../Home/home.php">Log out</a></td>	</tr>											
			</table>
		</td>
	</tr>
</table>