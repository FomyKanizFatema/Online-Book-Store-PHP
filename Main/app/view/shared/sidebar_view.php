<?php
//echo dirname(__DIR__);
$Dashboard='../user/dashboard.php';
$Profile='../user/profile.php';
$OrderHistory='../user/order_history.php';
$Wishlist='../user/wishlist.php';
$EditProfile='../user/edit_profile.php';
$ChangePass='../user/change_pass.php';
$Feedback='../user/feedback.php';
$logOut='../user/logout.php';
$ChangePic='../user/change_pic.php';
?>

<table border="1" cellpadding="10px">
	<tr>
		<td>

		<h3 align="center"><b>Account</b></h3><hr/>
			<table border="1" cellpadding="10px">
						<tr><td><a href="<?php echo $Dashboard;?>">Dashboard</a></td></tr>
						<tr><td><a href="<?php echo $Profile ;?>">Profile</a></td></tr>
						<tr><td><a href="<?php echo $OrderHistory;?>">Order History</a></td></tr>
						<tr><td><a href="<?php echo $Wishlist;?>">Wishlist</a></td></tr>
						<tr><td><a href="<?php echo $EditProfile;?>">Edit Profile</a></td></tr>
						<tr><td><a href="<?php echo $ChangePic;?>">Change Profile Picture</a></td></tr>
						<tr><td><a href="<?php echo $ChangePass;?>">Change Password</a></td></tr>
												<tr><td><a href="<?php echo $logOut;?>">Log out</a></td>	</tr>											
			</table>
		</td>
	</tr>
</table>