<?php
//echo dirname(__DIR__);
$Dashboard='dashboard.php';
$Profile='profile.php';
$dashboard='dashboard.php';
$OrderHistory='order_history.php';
$Wishlist='wishlist.php';
$EditProfile='editProfile.php';
$ChangePass='changePass.php';
$Feedback='feedback.php';
$logOut='logout.php';
$ChangePic='changePic.php';
$pendingOrder="pOrder.php";
$monthOrder="mOrder.php";
$allOrder="allOrder.php";
$userlist="userlist.php";
$addUser="addUser.php";
$removeUser="removeUser.php";
$updateUser="updateUser.php";
$booklist="booklist.php";
$addBook="addBook.php";
$removeBook="removeBook.php";
$updateBook="updateBook.php";
?>

<table border="1" cellpadding="10px" width="100%">
						<tr>
							<td>
				
							<h3 align="center"><b>Account</b></h3><hr/>
								<table border="1" cellpadding="10px" width="100%">
											<!--<tr><td><a href="<?php //echo $dashboard;?>">Dashboard</a></td></tr>-->
											<tr><td><a href="<?php echo $Profile;?>">Profile</a></td></tr>											
											<tr><td><a href="<?php echo $EditProfile;?>">Edit Profile</a></td></tr>
											<!--<tr><td><a href="<?php echo $ChangePic;?>">Change Profile Picture</a></td></tr>-->
											<tr><td><a href="<?php echo $ChangePass;?>">Change Password</a></td></tr>											
											<tr><td><a href="logout.php">Log out</a></td>	</tr>										
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Orders</b></h3><hr/>
								<table border="1" cellpadding="10px"width="100%">
											<!--tr><td><a href="<?php echo $pOrder;?>">Pending Orders</a></td></tr>
											<tr><td><a href="<?php echo $mOrder;?>">Month's History</a></td></tr-->
											<tr><td><a href="<?php echo $allOrder;?>">All Orders</a></td></tr>
																				
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Users</b></h3><hr/>
								<table border="1" cellpadding="10px" width="100%">
											<tr><td><a href="<?php echo $userlist;?>">Userlist</a></td></tr>
											<tr><td><a href="<?php echo $addUser;?>">Add New User</a></td></tr>
											<tr><td><a href="<?php echo $removeUser;?>">Remove User</a></td></tr>
											<tr><td><a href="<?php echo $updateUser;?>">Update User</a></td></tr>																														
								</table>
							</td>
						</tr>
						
						<tr>
							<td>
				
							<h3 align="center"><b>Books</b></h3><hr/>
								<table border="1" cellpadding="10px" width="100%">
											<tr><td><a href="<?php echo $booklist;?>">Booklist</a></td></tr>
											<tr><td><a href="addbook.php">Add New Book</a></td></tr>
											<!--tr><td><a href="<?php echo $removebook;?>">Remove Book</a></td></tr>
											<tr><td><a href="<?php echo $updatebook;?>">Update Book</a></td></tr-->	
																				
								</table>
							</td>
						</tr>
		</table>