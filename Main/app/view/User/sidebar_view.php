<?php
//echo dirname(__DIR__);
$Dashboard='dashboard.php';
$Profile='profile.php';
$OrderHistory='order_history.php';
$Wishlist='wishlist.php';
$EditProfile='edit_profile.php';
$ChangePass='change_pass.php';
$Feedback='feedback.php';
$logOut='logout.php';
$ChangePic='change_pic.php';
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